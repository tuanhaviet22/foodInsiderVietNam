<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Auth_Model extends Model
{
    protected $table = "admin";
    protected $fillable = [
    	'username' , 'email' , 'password' , 'permission'
    ];
}
