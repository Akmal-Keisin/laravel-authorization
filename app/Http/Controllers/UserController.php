<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.user.index');
    }

    public function create()
    {
        return view('pages.user.create');
    }

    public function store()
    {
        dd('test');
    }
}
