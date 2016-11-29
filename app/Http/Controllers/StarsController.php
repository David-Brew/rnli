<?php

namespace App\Http\Controllers;

use App\Star;
use Request;
use App\Http\Requests\StarRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection;


class StarsController extends Controller
{
    /*
    *
    *   Display the homepage and stars
    *
    */
    
    public function index(){
        
        $stars = Star::all();
        return view('pages/home', compact('stars'));
    }
    
    /*
    *
    *   Display the stars in the dashboard for admin users to edit
    *
    */
    
    public function list(){
        
        $stars = Star::orderBy('created_at', 'desc')->get();
        return view('dashboard/stars', compact('stars'));
    }
    
    /*
    *
    *   Return the create page where admin can add new stars
    *
    */

    public function create(){
        return view('dashboard/create');
    }

    /*
    *
    *   Show individual stars to the admin on the dashboard
    *
    */
    
    public function show($id){
        
        $star = Star::findOrFail($id);
        return view('dashboard/show', compact('star'));
    }
    
    /*
    *
    *   Save new stars created by admin
    *
    */
    
    public function store(StarRequest $request){
        
        //validation must pass
        
        $input = Request::all();
        Star::create($input);
        return redirect('stars');
    }
    /*
    *
    *   Edit Stars
    *
    */
    
    public function edit($id){
        
         $star = Star::findOrFail($id);
        return view('dashboard/edit', compact('star'));
        
    }
    
    /*
    *
    *   Update Stars Method
    *
    */
    
    public function update($id, StarRequest $request){
        
        $star = Star::findOrFail($id);
        $star->update(Request::all());
        return redirect('stars');
        
    }
    
    public function destroy($id, Request $request){
        $star = Star::findOrFail($id);
        $star->delete(Request::all());
        return redirect('stars');
    }
    
    public function executeSearch(){
        
        $keywords = Input::get('keywords');
        $stars = Star::all();
        $searchStars = new Collection();
       foreach($stars as $star){
            if(str_contains($star->name, [$keywords]))
                $searchStars->push($star->name);
            }
               
        return view('partials/_searchStars', compact('searchStars'));
    }

    
}
