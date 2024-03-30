<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class MailController extends Controller
{
    public function sendEmail()
    {
        $details=[
            'title'=>'Mail From MyProperty',
            'body'=>'Test Mail'
        ];

        // Mail::to("itbs.imerp4@gmail.com")->send(new TestMail($details));
        return "Email Sent";
    }
}
