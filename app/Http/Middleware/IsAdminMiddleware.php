<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
use DB;

class IsAdminMiddleware
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
        if(Auth::user())
        {    
        $data=DB::table('admins')
              ->where('user_id','=',Auth::user()->id)
              ->first();

        // return $data;     
         if($data)
            return $next($request);
              
        }    
        return redirect('/');                    
    }
}
