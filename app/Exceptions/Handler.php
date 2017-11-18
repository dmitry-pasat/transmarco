<?php namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler {

	/**
	 * A list of the exception types that should not be reported.
	 *
	 * @var array
	 */
	protected $dontReport = [
		'Symfony\Component\HttpKernel\Exception\HttpException'
	];

	/**
	 * Report or log an exception.
	 *
	 * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
	 *
	 * @param  \Exception  $e
	 * @return void
	 */
	public function report(Exception $e)
	{
		if(isset($_REQUEST['testmode']) && $_REQUEST['testmode'] == 1)
		{
			// $exception = $e;
	  //       $pageURL  = "";
	  //       $errorMessage = $exception->getMessage();        
	  //       $filePath = $exception->getFile();
	  //       $lineNumber = $exception->getLine();
	  //       $errorClass = get_class($exception);


	  //       $content = "<h3>Hello, admin</h3>";
	  //       $content .= "<p>Below are details of error occured website:</p>";
	  //       $content .= "<p><b>Date:</b> ".date("Y-m-d H:i:s")."</p>";
	  //       $content .= "<p><b>Page URL:</b> $pageURL</p>";
	  //       $content .= "<p><b>Request Method:</b> ".\Request::method()."</p>";
	  //       $content .= "<p><b>User Agent:</b> ".\Request::header('user-agent')."</p>";        
	  //       $content .= "<p><b>Error Class:</b> $errorClass</p>";
	  //       $content .= "<p><b>Error Message:</b> $errorMessage</p>";
	  //       $content .= "<p><b>Error ON File:</b> $filePath</p>";
	  //       $content .= "<p><b>Error in line number:</b> $lineNumber</p>";      		
	  //       echo $content;
	  //       exit;
		}
		return parent::report($e);
	}

	/**
	 * Render an exception into an HTTP response.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Exception  $e
	 * @return \Illuminate\Http\Response
	 */
	public function render($request, Exception $e)
	{
		return parent::render($request, $e);
	}

}
