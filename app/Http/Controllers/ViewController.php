<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ViewController extends Controller
{
    public function personal(): RedirectResponse|View
    {
        if (!Auth::check())
            return redirect('/');

        return view('lk', ['user' => Auth::user()]);
    }
}
