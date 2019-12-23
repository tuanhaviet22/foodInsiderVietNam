<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth ;
class Home extends Controller
{
	function __construct()
	{
		if(Auth::guard('admin')->check()){
			return redirect('admin/login');
		};
	}
    public function index()
    {
    	
       return view('admin/home');
    }
}
