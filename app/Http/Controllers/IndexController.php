<?php 

	namespace App\Http\Controllers;

	use DB;
	
	class IndexController extends Controller {


		public function __construct() {
		
			$this->middleware('auth');
		
		}

	
		public function index() {
			
			return redirect('/admin/dashboard');
		
		}
	
	}
