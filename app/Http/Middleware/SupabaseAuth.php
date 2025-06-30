<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SupabaseAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        // Apakah sesi 'is_authenticated' milik Laravel ada dan bernilai true?
        if ($request->session()->get('is_authenticated')) {
            // Jika ya, izinkan pengguna melanjutkan.
            return $next($request);
        }

        // Jika tidak, redirect ke halaman login.
        return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
    }
}