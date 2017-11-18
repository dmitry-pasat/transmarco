<?php 

	namespace App\Http\Controllers\Admin;

	use App\Http\Controllers\Controller;	

	use App\Email;
	use App\SMS;
	
	class DashboardController extends Controller {


		public function __construct() {
		
			$this->middleware('auth');
		
		}

	
		public function index() {
			
			$Data = array ();
			
			$Data ['StartDate'] =  date('dS F Y', strtotime('-13 day'));
			$Data ['EndDate'] = date('dS F Y', time());
			$Data ['FirstDate'] =  date('dS F Y', strtotime('-13 day'));
			$Data ['TodayDate'] = date('dS F Y', time());

			$StartTime = date('Y-m-d', time()).' 00:00:00';
			$EndTime = date('Y-m-d', time()).' 23:59:59';

			$StartTime2 = date('Y-m-d',  strtotime('-13 day')).' 00:00:00';
			$EndTime2 = date('Y-m-d', time()).' 23:59:59';	
			
			// EMAILS
			
			$Data ['count_emails_all'] = Email::count();			
						
			$Data ['count_emails_today'] = Email::where('created_at', '>=', $StartTime)->where('created_at', '<=', $EndTime)->count();			

			$Emails = Email::where('created_at', '>=', $StartTime2)->where('created_at', '<=', $EndTime2)->orderBy('created_at', 'ASC')->get();		
		
			foreach ($Emails as $key => $value) {
				
				$date = date ('d.m', strtotime($value->created_at));
			
				$Data ['emails'] [$date] ['date'] = $date;
				$Data ['emails'] [$date] ['value'] = 0;
			
			}
			
			foreach ($Emails as $key => $value) {
				
				$date = date ('d.m', strtotime($value->created_at));
				
				$Data ['emails'] [$date] ['value']++;
			
			}			

			
			// SMS
			
			$Data ['count_sms_all'] = SMS::count();			
						
			$Data ['count_sms_today'] = SMS::where('created_at', '>=', $StartTime)->where('created_at', '<=', $EndTime)->count();			

			$SMS = SMS::where('created_at', '>=', $StartTime2)->where('created_at', '<=', $EndTime2)->orderBy('created_at', 'ASC')->get();		
		
			foreach ($SMS as $key => $value) {
				
				$date = date ('d.m', strtotime($value->created_at));
			
				$Data ['sms'] [$date] ['date'] = $date;
				$Data ['sms'] [$date] ['value'] = 0;
			
			}
			
			foreach ($SMS as $key => $value) {
				
				$date = date ('d.m', strtotime($value->created_at));
				
				$Data ['sms'] [$date] ['value']++;
			
			}				
			
			
		
			return view ('admin.dashboard', $Data);
		
		}
	

}
