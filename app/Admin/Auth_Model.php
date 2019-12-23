<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Auth_Model  extends Authenticatable 
{
    protected $table = "admin";
    protected $fillable = [
    	'username' , 'email' , 'password' , 'permission'
    ];
}
