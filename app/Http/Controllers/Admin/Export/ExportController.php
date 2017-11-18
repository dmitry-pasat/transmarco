<?php

namespace App\Http\Controllers\Admin\Export;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Email;
use App\SMS;
use Excel;

class ExportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public function exportEmail()
    {
        $StartTimeEmail = date('Y-m-d',  strtotime('-7 day')).' 00:00:00';
        $EndTimeEmail = date('Y-m-d', time()).' 23:59:59';

        $emails = Email::where('created_at', '>=', $StartTimeEmail)->where('created_at', '<=', $EndTimeEmail)->orderBy('created_at', 'ASC')->get();

        Excel::create('exportEmails', function ($excel) use ($emails) {

            $excel->sheet('New sheet', function($sheet) use ($emails){

                $sheet->loadView('export.email')->with('emails', $emails);

            });

        })->store('csv', storage_path('csv/exports/email'))->export('csv');

        return redirect('/admin/dashboard');

    }

    public function exportSms()
    {
        $StartTimeSms = date('Y-m-d',  strtotime('-7 day')).' 00:00:00';
        $EndTimeSms = date('Y-m-d', time()).' 23:59:59';

        $sms = SMS::where('created_at', '>=', $StartTimeSms)->where('created_at', '<=', $EndTimeSms)->orderBy('created_at', 'ASC')->get();

        Excel::create('exportSms', function ($excel) use ($sms) {

            $excel->sheet('New sheet', function($sheet) use ($sms){

                $sheet->loadView('export.sms')->with('sms', $sms);

            });

        })->store('csv', storage_path('csv/exports/sms'))->export('csv');

        return redirect('/admin/dashboard');

    }
}
