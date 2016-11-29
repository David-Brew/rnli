<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

    
    public function contact()
        {
            // Pasing Variables to the page
            $first = 'David';
            $second = 'Brew';
           // return view('pages/contact')->with('name', $name);
/*            return view('pages/contact')->with([
                'first' => $first,
                'second' => $second
            ]);*/
            return view('pages/contact', compact('first', 'second')); // Compact() a function that builds an associative array from input
        }
    
    // Passing an array to the page

/*        public function contact()
        {
            $data = [];
            $data['first'] = 'David';
            $data['second'] = 'Brew';
            
            return view('pages/contact', $data);
        }*/
    
    public function about(){
        return view('pages/about');
    }
    public function sponsor(){
        return view('pages/sponsor');
    }

}
