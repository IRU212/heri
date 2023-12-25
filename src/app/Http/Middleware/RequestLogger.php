<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class RequestLogger
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
        if (in_array(app()->environment(), ["local", "development"])) {
            $this->writeLog($request);
        }
        return $next($request);
    }

    private function writeLog($request)
    {
        Log::debug([
            'url' => $request->fullUrl(),
            'header' => [
                'host' => $request->headers->all()['host'][0],
                'accept-encoding' => $request->headers->all()['host'][0],
                'content-type' => $request->headers->all()['content-type'][0],
            ],
            'request' => $request->all(),
        ]);
    }
}
