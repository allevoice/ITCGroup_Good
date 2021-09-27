<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Newlang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //si on veux passer par la variable session
        /*if (session()->has('lang')) {
            App::setlocale(session()->get('lang'));
        }*/

        //si on veux passer par le set language de laravel
        APP::Setlocale($request->segment(1));


        return $next($request);
    }
}
