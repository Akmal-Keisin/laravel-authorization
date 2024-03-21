<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        try {
            return view('pages.auth.login');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
