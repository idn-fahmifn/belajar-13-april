<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        // JIka ingin disetujui, harus mematuhi aturan berikut : 

        $umur = $request->session()->get('umur'); //20

        if ($umur >= 18) {
            // izinkan masuk.
            return $next($request);
        }

        // kalo ga diizinin? 
        return back()
        ->with('fail', 'Umur kamu belum sesuai');
    }
}
