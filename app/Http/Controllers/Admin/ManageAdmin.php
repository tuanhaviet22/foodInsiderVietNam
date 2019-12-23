<?php

namespace App\Http\Controllers\Admin;
use App\Admin\Auth_Model as Model; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;
use App\Mail\ManageAdminMail;
use Mail ;
use Validator;
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

    	$valid = [
    		'email' => $email , 
    		'password' => $password,
    		'fullname' => $fullname
    	];

    	$checkValidate = $this->validateInput($valid) ;	
    	// dd($checkValidate);
    	if(!$checkValidate){
    		Model::create([
   			'username' => $fullname , 
   			'email' => $email, 
   			'password' => bcrypt($password), 
   			'permission' => $permission
   		]);
   		  $data = [
   		  	'email' => $email,
   		  	'password' => $password
   		];
	    	Mail::to($email)->send(new ManageAdminMail($data));
	   		return response()->json(['status' => true]) ;
    	}else{
    		return response()->json(['status' => false , 'message' => $checkValidate]);
    	}
   		
    }

    private function validateInput($rq){
    	$check = Validator::make($rq ,[
    		'fullname' => "bail|required|alpha" ,
    		'password' => 'bail|required' , 
    		'email' => 'bail|required|unique:admin,email|email'
    	]);
    	if($check->fails()){
    		return $check->errors()->all(); 
    	}else{
    		return $check->fails();
    	}
    }
    
}
