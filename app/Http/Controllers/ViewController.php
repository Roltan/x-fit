<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ViewController extends Controller
{
    public function index(): View
    {
        $slider = Slider::query()
            ->where('vis', true)
            ->orderByDesc('sort')
            ->get();
        return view('index', ['slider' => $slider]);
    }

    public function personal(): RedirectResponse|View
    {
        if (!Auth::check())
            return redirect('/');

        return view('lk', ['user' => Auth::user()]);
    }
}
