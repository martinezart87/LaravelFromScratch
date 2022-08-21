<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SendNotification;
use Illuminate\Support\Facades\Notification;

class SendNotificationController extends Controller
{
    // php artisan make:notification SendNotification 

    public function show(){
        return view('laracast.sendnotify');
    }

    public function store(){
        // request()->user()->notify(new SendNotification());
        // OR
        Notification::send(request()->user(), new SendNotification(900));

        dd('Send Notification');
        // dd(request()->user(), new SendNotification());
    }
    //
}
