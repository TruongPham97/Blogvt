<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Schema;

class DatabaseController extends Controller
{
    function CreateTable(){
        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->boolean('gender');
            $table->date('dateofbirth');
            $table->timestamps();
        });
        echo 'tao thanh cong';
    }
    function GetCategory(){
        $category = DB::table('categories')->get();
        return view('client.home.category', compact('category'));
    }
    function  GetPost(){
        $post = DB::table('posts')->get();
        return view('client.home.detail', compact('post'));
    }
}
