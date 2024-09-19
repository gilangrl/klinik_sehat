<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutoLogout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek jika user sudah login
        if (Auth::check()) {
            $timeout = config('session.lifetime') * 60; // Dapatkan waktu timeout dari session config dalam detik
            $lastActivity = session('lastActivityTime'); // Ambil waktu terakhir aktivitas

            if ($lastActivity && (time() - $lastActivity > $timeout)) {
                Auth::logout(); // Logout pengguna
                session()->forget('lastActivityTime'); // Hapus data session aktivitas terakhir
                return redirect('/')->with('message', 'Session expired due to inactivity.');
            }

            // Perbarui waktu aktivitas terakhir
            session(['lastActivityTime' => time()]);
        }

        return $next($request);
    }
}
