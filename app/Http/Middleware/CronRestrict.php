<?php 

	namespace App\Http\Middleware;

	use Closure;

	class CronRestrict {

		public function handle($request, Closure $next) {
			
			/*
			if ($_SERVER ['REMOTE_ADDR'] == '176.36.140.33') {			
			
				header('HTTP/1.1 503 Service Temporarily Unavailable');
				header('Status: 503 Service Temporarily Unavailable');
				header('Retry-After: 604800');
				exit();				
			
			}
			*/

			return $next($request);
		
		}
		

	}