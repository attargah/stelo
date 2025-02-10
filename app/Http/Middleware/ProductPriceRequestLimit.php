<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ProductPriceRequest;
use Carbon\Carbon;

class ProductPriceRequestLimit
{
    protected int $maxRequests = 3;
    protected int $timeWindowDays = 5;

    public function handle(Request $request, Closure $next): Response
    {

        $ip = $request->ip();
        $timeLimit = Carbon::now()->subDays($this->timeWindowDays);

        $requestCount = ProductPriceRequest::where('ip_address', $ip)
            ->where('created_at', '>=', $timeLimit)
            ->count();

        if ($requestCount >= $this->maxRequests) {
            return back()->withErrors([
               'error'=> __('errors.too-many-requests')
            ]);
        }

        return $next($request);
    }
}
