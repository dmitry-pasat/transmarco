<?php 

	namespace App\Http\Controllers\Admin\Report;

	use App\Http\Controllers\Controller;	
		
	use App\Email;	
	use App\SMS;	
	use App\User;	
	
	use Mail;
    use Config;

	class ReportController extends Controller {

		public $Cdate;
	
	
		public function __construct() {
				
			$this->CDate = date('Y-m-d H:i');
				
			$this->middleware('cron');
			 
		}
		

		//$StartTime = date('Y-m-d', strtotime('-1 day')).' 00:00:00';
		//$EndTime = date('Y-m-d', strtotime('-1 day')).' 23:59:59';
		//$Emails = Email::where('created_at', '>=', $StartTime)->where('created_at', '<=', $EndTime)->get();
		
		
		
		public function email() {
						
			$Emails = Email::where('report_flag', 0)->get();
						
			$RMails = explode (';', env('REPORT_MAIL'));

			foreach ($RMails as $key => $value) {
				
				$value = trim ($value);
				
				if (!empty($value)) {

					Mail::send('reports.email', array ('emails' => $Emails, 'date' => date("Y-m-d g:i A",time() + 28800)), function($message) use ($value) {
				
						$message->to($value, $value)->subject('Emails report: '.date("Y-m-d g:i A",time() + 28800));
			
					});
					
				}
				
			}

			$affectedRows = Email::where('report_flag', 0)->update(['report_flag' => 1]);
			
		}

		public function sms() {
						
			$SMS = SMS::where('report_flag', 0)->get();
						
			$RMails = explode (';', env('REPORT_MAIL'));			
						
			foreach ($RMails as $key => $value) {
				
				$value = trim ($value);						
				
				if (!empty($value)) {
						
					Mail::send('reports.sms', array ('sms' => $SMS, 'date' => date("Y-m-d g:i A",strtotime($this->CDate))), function($message) use ($value) {
				
						$message->to($value, $value)->subject('SMS report: '.date("Y-m-d g:i A",strtotime($this->CDate)));
			
					});		
					
				}
				
			}

			$affectedRows = SMS::where('report_flag', 0)->update(['report_flag' => 1]);
			
		}		
		
	
	}
