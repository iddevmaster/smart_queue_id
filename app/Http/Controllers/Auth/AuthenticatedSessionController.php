<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }


    public function cmscreate(): Response
    {

      
        
        return Inertia::render('Auth/LoginCms', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

      

        // $credentials = $request->only('email', 'password');

        // if (Auth::guard('customer')->attempt($credentials)) {
        //     $request->session()->regenerate();
        //    // return redirect()->intended('/dashboard');
        //    return redirect()->intended(RouteServiceProvider::HOME);
        // }

        // return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
     
    $request->authenticateAdmin();

     $request->session()->regenerate();

     $guard = Auth::guard('web');
  

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {

       
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
