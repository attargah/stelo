<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LanguageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locales = ['tr','en']; //diller dinamik hale getirilirse değiştirilecek yer


        if (!$request->route()->hasParameter('locale'))
        {
            return redirect()->back();
        }

        if (!in_array($request->route('locale'), $locales)){
            return redirect()->back();
        }

        return $next($request);
    }
}
