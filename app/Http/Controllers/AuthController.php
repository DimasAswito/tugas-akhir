<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // <-- Import HTTP Client Laravel

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Metode ini dipanggil oleh JavaScript setelah Supabase
     * mengonfirmasi login (baik via password maupun Google).
     * Sekarang menggunakan HTTP Client bawaan Laravel.
     */
    public function handleCallback(Request $request)
    {
        $accessToken = $request->input('accessToken');

        if (!$accessToken) {
            return response()->json(['error' => 'Token tidak ditemukan'], 400);
        }

        // Ambil kredensial dari file .env
        $supabaseUrl = env('VITE_SUPABASE_URL');
        $supabaseAnonKey = env('VITE_SUPABASE_ANON_KEY');

        // Lakukan panggilan API ke endpoint '/auth/v1/user' Supabase
        $response = Http::withHeaders([
            'apikey' => $supabaseAnonKey,
            'Authorization' => "Bearer {$accessToken}",
        ])->get("{$supabaseUrl}/auth/v1/user");

        // Periksa apakah permintaan berhasil dan token valid
        if ($response->successful()) {
            // Ambil data user dari response JSON
            $user = $response->json();

            // Jika token valid, buat sesi di Laravel
            $request->session()->put('is_authenticated', true);
            $request->session()->put('user_id', $user['id']);
            $request->session()->put('user_email', $user['email']);
            
            // Regenerasi ID sesi untuk keamanan
            $request->session()->regenerate();

            return response()->json(['status' => 'success']);
        }

        // Jika token tidak valid atau ada error lain
        return response()->json(['error' => 'Sesi tidak valid'], 401);
    }
}