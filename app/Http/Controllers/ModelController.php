<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    function GetList(){
        $categoryModel = new Category();
//        $list_category = $categoryModel;
//        dd($list_category);
        $categoryModel = Category::all();
        dd($categoryModel);
    }
}
