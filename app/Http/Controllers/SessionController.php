<?php

namespace App\Http\Controllers;

use App\Models\User\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    public function indexSessions()
    {
        $sessions = Session::where('type', 1)->where('published', 1)->orderByDesc('id')->get();
        $title = 'آرشیو جلسات';

        return view('sessions', compact('sessions', 'title'));
    }

    public function indexJahadi()
    {
        $sessions = Session::where('type', 2)->where('published', 1)->orderByDesc('id')->get();

        $title = 'فعالیت های جهادی';

        return view('sessions', compact('sessions', 'title'));
    }



    public function show(Session $session)
    {
        $session->load('videos', 'photos', 'sounds');
        $video = $session->videos->first();
        return view('User.session', compact('session'));
    }
}
