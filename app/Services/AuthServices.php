<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthServices {
    public function registerUser($fullName, $email, $password)
    {
        try {
            $user = User::where('email', $email)->first();
            if ($user) throw new \Exception("Email telah digunakan");

            return User::create([
                'name' => $fullName,
                'email' => $email,
                'password' => Hash::make($password)
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
