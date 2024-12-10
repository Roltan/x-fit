<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(RegisterRequest $request): Response
    {
        $data = $request->only([
            'name',
            'email',
            'password',
        ]);

        $user = User::create($data);
        Auth::login($user);

        return response(['status' => true, 'user' => Auth::user()], 200);
        // return response(['status' => true], 200);
    }
}
