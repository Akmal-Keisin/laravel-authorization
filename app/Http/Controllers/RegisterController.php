<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        try {
            return view('pages.auth.register');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function register()
    {
        try {

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
