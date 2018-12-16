<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    public function getHome(){
        return view('pages.home');
    }
    public function getMap(){
        return view('pages.map');
    }
    public function getInfo(){
        return view('pages.info');
    }
    public function getProfile(){
        return view('pages.profile');
    }
}
