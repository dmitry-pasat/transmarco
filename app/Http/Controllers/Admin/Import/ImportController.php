<?php 

	namespace App\Http\Controllers\Admin\Import;

	use App\Http\Controllers\Controller;	
	
	use App;	
	use Storage;
	use Validator;
	
	use App\Email;	
	use App\SMS;	
	
	use DB;
	use PDO;

	class ImportController extends Controller {
		
		
		private $ftp = false;

		
		public function __construct() {
				
			$this->middleware('cron');
			 
		}
	
		private function FileList () {
			
			$this->ftp = ftp_connect(env('FTP_SERVER'));
			if (!$this->ftp) die('could not connect.');
			
			$r = ftp_login($this->ftp, env('FTP_USER'), env('FTP_PASSWORD'));
			if (!$r) die('could not login.');
			
			$r_mode = ftp_pasv($this->ftp, true);
			if (!$r_mode) die('could not enable passive mode.');
			
			$FileList = ftp_nlist($this->ftp, "/");

            // close the connection
            //ftp_close($this->ftp);
			
			return $FileList;

		}
		
		private function ParseEmailsFile ($FileFullPath, $filename) {
			
			$row = 1;
			
			if (($handle = fopen($FileFullPath, "r")) !== FALSE) {
				
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				
					$num = count($data);
				
					if ($row > 1) {
				
						$validator = Validator::make(					
							['email' => $data [1]],						
							['email' => ['email']]
						);				
						
						if ($validator->fails()) {

						}
						else {
							
							$data [0] = trim ($data [0]);
							
							$data [1] = trim ($data [1]);
							
							$count = Email::where('email', $data [1])->count();
							
							if ($count == 0) {
														
								$Email = new Email;
							
								$Email->filename = $filename;
								$Email->name = $data [0];
								$Email->email = $data [1];
								
								$Email->save();
								
								$this->mail88($data[0], $data[1]);
								
								
							}
							
						}

					}
					
					$row++;
			
				}
			
				fclose($handle);
			
			}
			
		}
		
		
		
		private function mail88 ($name, $email) {
		
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "http://s1.e-mail88.com/autoimport/email_import.php?".md5(uniqid()));
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,
				"name=".$name."&email=".$email);

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$server_output = curl_exec ($ch);

			curl_close ($ch);

			echo $server_output;

			
		}
		
		
		
		private function ParseSMSFile ($FileFullPath, $filename) {
			
			$row = 1;
			
			if (($handle = fopen($FileFullPath, "r")) !== FALSE) {
				
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				
					$num = count($data);

					if ($row > 1 && $num == 4) {

                            $validator = Validator::make(
                                ['mobile' => $data [1]],
                                ['mobile' => ['string']]
                            );

						if ($validator->fails()) {

						}
						else {
							
							$count = SMS::where('mobile', $data [1])->count();
							
							if ($count == 0) {
														
								$SMS = new SMS;
							
								$SMS->filename = $filename;
								$SMS->nick_name = $data [0];
								$SMS->mobile = $data [1];
								$SMS->full_name = $data [2];
								$SMS->dob = $data [3];
								//$SMS->bod = date('Y-m-d H:i:s', strtotime($data [3]));
								
								$SMS->save();
								
							}
							
						}
					}

					$row++;

                }
				fclose($handle);
			
			}

		}		
		
		
		private function SaveFile ($filename, $FunctionName) {

			$filenamekey = md5 ($filename);
			
			$FileFullPath = config('filesystems.disks.local.root').'/'.$filenamekey[0].'/'.$filenamekey[1].'/'.$filenamekey[2].'/'.$filename;
			
			if (file_exists($FileFullPath)) {
			
				$this->$FunctionName ($FileFullPath, $filename); //for test

			}
			else {
				
				Storage::disk('local')->makeDirectory($filenamekey[0]);
			
				Storage::disk('local')->makeDirectory($filenamekey[0].'/'.$filenamekey[1]);
			
				Storage::disk('local')->makeDirectory($filenamekey[0].'/'.$filenamekey[1].'/'.$filenamekey[2]);				

				if (ftp_get($this->ftp, $FileFullPath, '/'.$filename, FTP_BINARY)) {

					$this->$FunctionName ($FileFullPath, $filename);

				}
				else {
					
					die('could not copy  file from  /'.$filename.' to '.$FileFullPath);
					
				}
				
			}
		
		}		
			
		public function email() {

			$FileList = $this->FileList();

            /*$first_sms_key = 0;
            for ($x=0; $x <= count($FileList); $x++) {

                $m = preg_match("/^sms_(\d{6})_(\d{4})\.csv$/iu", $FileList[$x], $matches);
                if ($m) {
                    $first_sms_key = $x;
                    break;
                }

            }

            $FileListEmails = array_slice($FileList, 0, $first_sms_key);*/

			foreach ($FileList as $value) {
				
				// template: email_120917_1428.csv
				
				$m = preg_match("/^email_(\d{6})_(\d{4})\.csv$/iu", $value, $matches);

				if ($m) {
					
					$this->SaveFile ($matches [0], 'ParseEmailsFile'); 
				
				}					
		
			}
			
		}
		
		public function sms() {
			
			$FileList = $this->FileList();

            $first_sms_key = 0;
            for ($x=0; $x <= count($FileList); $x++) {

                $m = preg_match("/^sms_(\d{6})_(\d{4})\.csv$/iu", $FileList[$x], $matches);
                if ($m) {
                    $first_sms_key = $x;
                    break;
                }

            }

            $FileListSms = array_slice($FileList, $first_sms_key);
			
			foreach ($FileListSms as $value) {
				
				// template: sms_170912_1425.csv
				
				$m = preg_match("/^sms_(\d{6})_(\d{4})\.csv$/iu", $value, $matches);		

				if ($m) {

					$this->SaveFile ($matches [0], 'ParseSMSFile');
				
				}					
		
			}
			
		}		
	
	}
