<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(protected AuthServices $service)
    {

    }

    public function register()
    {
        try {
            return view('pages.auth.register');
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }

    public function authRegister(RegisterRequest $request)
    {
        try {
            $this->service->registerUser(
                fullName: $request->get('full_name'),
                email: $request->get('email'),
                password: $request->get('password')
            );

            return redirect()->route('login')->with([
                'success' => 'Akun berhasil dibuat, sialahkan login'
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }

    public function login()
    {
        try {
            return view('pages.auth.login');
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }

    public function authLogin(LoginRequest $request)
    {
        try {
            if (Auth::attempt([
                    'email' => $request->validated('email'),
                    'password' => $request->validated('password')
                ])) {
                $request->session()->regenerate();

                return redirect()->intended('/dashboard');
            }

            return redirect()->back()->with([
                'error' => 'The provided credentials do not match our records.'
            ])->onlyInput('email');
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }
}
