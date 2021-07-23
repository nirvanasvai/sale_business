<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\City as ModelCity;

class City
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $segment = $request->segment(1);
        if ($segment) {
            $city = ModelCity::where('slug', $segment)->first();
            if (!$city) {
                $segments = $request->segments();
                return redirect()->to(env('DEFAULT_CITY'));
            }

            session(['city' => $segment]);
        } else {
            return redirect()->to(env('DEFAULT_CITY'));
        }

        return $next($request);
    }
}
