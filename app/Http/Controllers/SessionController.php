<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    public function indexSessions()
    {
        $sessions = Session::whereNotIn('type', [2])->orderByDesc('id')->get();

        return view('sessions', compact('sessions'));
    }

    public function show(Session $session)
    {
        $session->load('videos', 'photos', 'sounds');
        $video = $session->videos->first();
        return view('User.session', compact('session'));
    }
}
