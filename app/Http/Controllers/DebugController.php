<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebugController extends Controller
{
    public function debug () {
        // dd(env('CLIENT_ID'), env('CLIENT_SECRET'), env('REDIRECT_URL'));
        return response()->json(config('socialite.google'));
    }
}
