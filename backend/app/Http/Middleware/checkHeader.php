<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;  
use Response;  

class checkHeader
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
        
        if(!isset($_SERVER['HTTP_AUTHORIZATION'])){  
            return Response::json(array('error'=>'Please set custom header'));  
        }  
  
        if($_SERVER['HTTP_AUTHORIZATION'] != 'SCVHXczhiuiO'){  
            return Response::json(array('error'=>'wrong custom header'));  
        }
        return $next($request);
    }
}
