<?php

namespace YHShanto\LaraLang\Middlewares;

use Closure;

class Laralang
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
        \App::setLocale(session('lara-lang', config('laralang.fallback')));
        return $next($request);
    }
}
