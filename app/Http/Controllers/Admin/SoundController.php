<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sound;
use App\Models\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sounds = Sound::orderByDesc('id')->get();

        return view('admin.index_sounds', compact('sounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sessions = Session::orderByDesc('id')->get();

        return view('admin.create_sound', compact('sessions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'session_id' => 'required',
            'title' => 'required',
            'name' => 'required',
        ]);

        $sound = Sound::create([
            'title' => $request->title,
            'description' => $request->description,
            'path' => "sessions/$request->session_id/sounds/$request->name.mp3",
            'session_id' => $request->session_id,
        ]);

        return back()->with('message', 'sound added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function show(Sound $sound)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function edit(Sound $sound)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sound $sound)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sound  $sound
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sound $sound)
    {
        //
    }
}
