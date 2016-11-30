<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Star;
use Illuminate\Support\Facades\Input;
use Mail;

class EmailController extends Controller
{
    public function index(){
        
        
        return view('dashboard/email');
    }
    
    public function emailExample(){
        return view('email/template');
    }
    
    
    public function sendEmail(Request $request){
        
        $subject = $request->input('subject');
        $body = $request->input('body');
            
        Mail::send('email/template', ['title' => $subject, 'content' => $body], function ($message)
        {

            $message->from('kilrushrnli@gmail.com', 'Kilrush RNLI');

            $message->to('david.brew1988@gmail.com');
            
            $message->subject('Message from RNLI Stars');

        });
        
        
        return view('dashboard/email');
    }
    
    public function sendContact(Request $request){
        
        $subject = $request->input('subject');
        $body = $request->input('body');
            
        Mail::send('email/template', ['title' => $subject, 'content' => $body], function ($message)
        {

            $message->from('kilrushrnli@gmail.com', 'Kilrush RNLI');

            $message->to('david.brew1988@gmail.com');
            
            $message->subject('Message from RNLI Stars');

        });
        
        
        return view('dashboard/email');
    }
}
