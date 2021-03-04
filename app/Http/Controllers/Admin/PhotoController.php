<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use App\Models\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::orderByDesc('id')->get();

        return view('admin.index_photos', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sessions = Session::orderByDesc('id')->get();

        return view('admin.create_photo', compact('sessions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'session_id' => 'required',
            'images' => 'required',
            'images.*' => 'mimes:png,jpg'
        ]);


        if($request->hasfile('images'))
        {
            foreach($request->file('images') as $file)
            {
                $path = $file->store("sessions/$request->session_id/photos");
                $photo = Photo::create([
                    'path' => $path,
                    'session_id' => $request->session_id,
                ]);
            }
        }

        return back()->with('message', 'Data Your files has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        $sessions = Session::orderByDesc('id')->get();

        return view('admin.edit_photo', compact('sessions', 'photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $photo->update($request->all());

        return back()->with('message', 'عکس ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
