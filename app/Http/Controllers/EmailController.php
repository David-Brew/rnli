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
        $stars = Star::all();
        
       foreach($stars as $star){
           
            $email = $star->email;
           
                 Mail::send('email/template', ['title' => $subject, 'content' => $body], function ($message) use ($email){

                    $message->from('kilrushrnli@gmail.com', 'Kilrush RNLI');

                    $message->to($email);

                    $message->subject('Message from RNLI Stars');

                });  
           
           $success = 1;
           
        }
            

        
        
        return view('dashboard/email', compact('success'));
    }
    
    public function sendContact(Request $request){
        
        $subject = $request->input('subject');
        $body = $request->input('body');
        $name = $request->input('name');
        $email = $request->input('email');
            
        Mail::send('email/template', ['title' => $subject, 'content' => $body], function ($message) use ($subject, $name, $email)
        {

            $message->from($email, $name);

            $message->to('david.brew1988@gmail.com');
            
            $message->subject($subject);

        });
        
        $success = 1;
        return view('pages/contact', compact('success'));
    }
}
