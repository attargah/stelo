<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class SpamProtection
{
    protected int $maxRequests = 5;
    protected int $timeWindow = 60;
    protected int $blockTime = 300;

    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $key = "spam_protection:$ip";
        $blockKey = "spam_blocked:$ip";

        if (Cache::has($blockKey)) {
            return back()->withErrors([
                'error' => __('errors.too-many-attempts')
            ]);
        }

        $requests = Cache::get($key, 0);

        if ($requests >= $this->maxRequests) {
            Cache::put($blockKey, true, $this->blockTime);
            Cache::forget($key);
            return back()->withErrors([
                'error' => __('errors.too-many-attempts')
            ]);
        }

        Cache::put($key, $requests + 1, $this->timeWindow);

        return $next($request);
    }
}
