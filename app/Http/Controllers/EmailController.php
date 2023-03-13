<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $details =[
'title'=>'Mail from ....',
'body'=>'This is for ....'
        ];
        Mail::to("bakkouadnane88@gmail.com")->send(new TestMail($details));
return"email sent";   
    }
}
