<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mailer;
use Mail;

class MailController extends Controller
{
    public function send(Request $request){


        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'user_message' => 'required' ]);
        Mailer::create($request->all()); 
    
        Mail::send('email',
           array(
               'name' => $request->get('name'),
               'email' => $request->get('email'),
               'user_message' => $request->get('user_message')
           ), function($message)
       {
           $message->from('qevinodhiambo@gmail.com');
           $message->to('qkevinodhiambo@gmail.com')->subject('Test Mail');
       });
    
        return back()->with('success', 'Thanks for contacting us!'); 
    }
}
