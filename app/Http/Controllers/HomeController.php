<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Index(){
        return view('client.home.index');
    }
    function Category(){
        return view('client.home.category');
    }
    function Detail(){
        return view('client.home.detail');
    }
}
