<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Foundation\Application;

class LangMiddleware
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
        // if($lang = $request->session()->get('lang')){
        //     App::setLocale($lang);
        // }
        if(\Session::has('locale'))
        {
            \App::setlocale(\Session::get('locale'));
        }

        return $next($request);
    }
}
