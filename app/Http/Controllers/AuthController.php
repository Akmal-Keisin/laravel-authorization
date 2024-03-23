<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\AuthServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
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
            $user = User::where('email', $request->validated('email'))->first();
            if ($user) throw new \Exception("Email telah digunakan");

            User::create([
                'name' => $request->validated('name'),
                'email' => $request->validated('email'),
                'password' => Hash::make($request->validated('password'))
            ]);

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

                return redirect()->intended('/dashboard')->with([
                    'success' => 'Login success, have a great day'
                ]);
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

    public function authLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with([
            'success' => 'Logout success, see you next time'
        ]);
    }
}
