<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    //php artisan make:mail SendMail

    public function show(){

        return view('laracast.sendmail');
    }

    public function store(){

        Mail::to('mr.swierczek@gmail.com')->send(new SendMail('titile'));
        dd('Check Mailtrap inbox');
    }
}
