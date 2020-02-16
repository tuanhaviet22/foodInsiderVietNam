<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Auth ; 
class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check('admin')){
            return $next($request);
        }else{
            return redirect()->route('get_login');  
        }
        
    }
}
