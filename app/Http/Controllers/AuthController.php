<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Services\AuthServices;
use Illuminate\Http\Request;

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
            throw $th;
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
            throw $th;
        }
    }

    public function authLogin()
    {
        try {

        } catch (\Throwable $th) {

        }
    }
}
