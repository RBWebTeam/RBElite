<?php

namespace App\Http\Middleware;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Closure;
use Session;

class CheckAuth
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
                
                if (!$request->session()->exists('email')){
                    //return redirect()->back();
                    return redirect('/');
                }else{
                   return $next($request);
                }

          
        //     if (!$request->session()->exists('email')){
             
        //     if ($request->ajax()) {
                
        //           return redirect('/');
        //     } else {
        //         return redirect()->back();
        //     }
        // } 

           //return $next($request);
    }
}
