<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	Route::get('/', 'IndexController@index');
	Route::get('/home', 'IndexController@index');

	Route::get('/admin/dashboard', 'Admin\DashboardController@index');
    Route::post('/admin/dashboard', ['as' => 'admin.avatar', 'uses' => 'Admin\DashboardController@changeAvatar']);
	
	Route::get('/admin/dashboard', 'Admin\DashboardController@index');
	
	Route::get('/admin/import/email', 'Admin\Import\ImportController@email');
	Route::get('/admin/import/sms', 'Admin\Import\ImportController@sms');

	Route::get('/admin/report/email', 'Admin\Report\ReportController@email');
	Route::get('/admin/report/sms', 'Admin\Report\ReportController@sms');

/*Export emails and sms*/
	Route::get('/admin/dashboard/email', ['as' => 'export.email', 'uses' => 'Admin\Export\ExportController@exportEmail']);
	Route::get('/admin/dashboard/sms', ['as' => 'export.sms', 'uses' => 'Admin\Export\ExportController@exportSms']);

	Route::controllers([
	
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
		
	]);
