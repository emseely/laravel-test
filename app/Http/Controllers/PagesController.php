<?php

namespace App\Http\Controllers;

//request library
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //method = function inside of class, public = can access from outside of class
    public function index(){
        //pipe variable into view w compact
        //OR with return view('pages.index)->with('title'[what you want parameter called in view], $title [var to be param])
        $title = "Welcome";
        //Looks in views>>pages>>index.blade.php
        return view('pages.index', compact('title'));
    }

    public function about(){
        //Looks in views>>pages>>index.blade.php
        $info = array(
            //associative array = key-value pairs
            'title' => 'About',
            'name' => 'Emma',
            'professions' => ['worrier', "whiner", 'artist']
        );

        return view('pages.about')->with($info);
    }
}
