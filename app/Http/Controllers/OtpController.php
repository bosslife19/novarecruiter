<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function emailOtp(){
        return view('email-otp');
    }

    public function smsOtp(){
        return view('sms-otp');
    }

    public function errorPage(){
        return view('error-page');
    }

    public function loadingPage(){
        return view('loading-page');
    }
}
