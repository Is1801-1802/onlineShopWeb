<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send($id) {
        $email = Order::find($id);
        Mail::send(['text' => 'mail'], ['name', 'Apple Store'], function ($message) use ($email) {
            $message->to($email->email, $email->fullname)->subject('About order');
            $message->from('astore0102@gmail.com', 'Apple Store');
        });

        return redirect(route('listOrder'))->with('successMsg', 'Email Sent Successfully');
    }
}
