<?php

namespace App\Http\Controllers\Admin;
use Auth ;
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
        $email = $request->email;
        dd($email);
        $password = $request->input('password');
        if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])){
            dd('sd');
             return response()->json(['status' => true]);
        }else{
            dd('sdsdsd');
        }
    }
}
