<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // if($request->age < 20){
        //     return redirect()->route('home')->with('erros', 'Umur kamu masih dibawah 20 tahun !');
        // }
        // return $next($request);

        //Middleware with paramter
        if(!$request->user()->hasRole($role)){
            //
        }
        return $next($request);
    }
}
