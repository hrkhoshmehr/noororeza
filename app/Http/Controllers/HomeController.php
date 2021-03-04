<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nextSession = Session::whereNotIn('type', [2])->orderByDesc('id')->first();

        $lastActivities = Session::where('type', 2)->orderByDesc('id')->limit(2)->get();

        $lastSessions = Session::whereNotIn('type', [2])->where('published', 1)->orderByDesc('id')->limit(3)->get();


        return view('welcome', compact('nextSession', 'lastActivities', 'lastSessions'));
    }
}
