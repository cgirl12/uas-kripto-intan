<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class XSSMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $input = $request->all();

        array_walk_recursive($input, function (&$value) {
            // Hapus tag HTML dan encoding karakter spesial untuk mencegah XSS
            $value = strip_tags($value);
            $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        });

        $request->merge($input);

        return $next($request);
    }
}
