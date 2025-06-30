<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::post('/multi-auth', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }

    Auth::login($user);
    return redirect('https://commerce.scidata-analyst.com/dashboard');
});
