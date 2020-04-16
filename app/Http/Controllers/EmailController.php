<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;
class EmailController extends Controller{
    public function sendEmail()
    {
        $data['title'] = "email email email";
        Mail::send('email', $data, function($message) {
            $message->to('arsh3874@gmail.com', 'Receiver Name')
                ->subject('first email from laravel');
        });
        return "emailed";
    }}
