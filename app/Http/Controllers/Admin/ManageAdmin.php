<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageAdmin extends Controller
{
    public function add_admin_page(){
        return view('admin/add-admin');
    }

    
}
