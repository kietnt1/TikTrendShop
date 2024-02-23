<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site/components/user/home');
    }
    public function about(){
        return view('site/components/user/about');
    }
}