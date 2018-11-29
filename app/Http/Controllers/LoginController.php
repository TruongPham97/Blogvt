<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function getLogin(){
        return view('admin.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required|min:3'
            ],
            [
                'email.required'=>'bạn chưa nhập email',
                'password.required'=>'bạn chưa nhập pass',
                'password.min'=>'pass ít nhất 3 kí tự'
            ]
            );
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin/index');
        }else{
            return redirect('admin/login')->with('thongbao','Dang nhap ko thanh cong');
        };


    }
}
