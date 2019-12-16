<?php

namespace App\Http\Controllers\Admin;
use App\Admin\Auth_Model as Model; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;

class ManageAdmin extends Controller
{
    public function add_admin_page(){
        return view('admin/add-admin');
    }
    public function register_admin(Request $request)
    {
    	$email = $request->input('email');
    	$fullname = $request->input('fullname');
    	$password = Str::random(12);
    	$permission = $request->input('permission');
   		Model::create([
   			'username' => $fullname , 
   			'email' => $email , 
   			'password' => bcrypt($password), 
   			'permission' => $permission
   		]);
   		return response()->json(true) ;
    }
    
}
