<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller 
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(Request $request){
        if ($request->page ){
            return $request->page;
        }
        return view('contact');
    }

public function getcontactParam($id){
    return view('contactParam', ['id' => $id]);
}
}

