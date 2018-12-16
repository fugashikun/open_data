<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
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
}
