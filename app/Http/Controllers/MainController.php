<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Feedback;

class MainController extends Controller
{
    public function index()
    {
        if (Auth::guest()) {
            return redirect('/login');
        }

        $applications = auth()->user()->applications()->get();

        return view('welcome', compact('applications'));
    }
}
