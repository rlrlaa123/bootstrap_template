<?php

namespace App\Http\Controllers;

use App\Intro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $intro = Intro::all();

        return view('home',compact('intro'));
    }
}
