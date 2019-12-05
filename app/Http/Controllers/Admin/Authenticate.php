<?php

namespace App\Http\Controllers\Admin;
use App\Admin\Auth_Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Authenticate extends Controller
{
    public function Index()
    {
        return view('admin/login');
    }
    public  function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            
        }
    }
}
