<?php

namespace App\Http\Controllers\Admin;

use Verta;
use App\Models\Event;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $sessions = Session::all();

        return view('admin.index_sessions', compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();

        return view('admin.create_session', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['date'] = Carbon::createFromTimestamp($request->date);
        $v = verta($input['date']);
        $session = Session::create($input);
        $eventType = optional($session->event)->type;

        if($request->cover) {
            $path = $request->file('cover')->storeAs("sessions/$session->id", "cover.jpg");
            $session->cover = $path;
        }
        if($request->notification) {
            $path = $request->file('notification')->storeAs("sessions/$session->id", "notification.jpg");
            $session->notification = $path;
        }
        Storage::makeDirectory("sessions/$session->id/sounds");


        $session->save();


        return back()->with('message', 'session created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function edit(Session $session)
    {
        $events = Event::orderByDesc('id')->get();
        return view('admin.edit_session', compact('events', 'session'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\session  $session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Session $session)
    {
        $session->update($request->all());

        if($request->notification) {
            $path = $request->file('notification')->storeAs("sessions/$session->id", "notification.jpg");
            $session->notification = $path;
        }
        if($request->cover) {
            $path = $request->file('cover')->storeAs("sessions/$session->id", "cover.jpg");
            $session->cover = $path;
        }
        $session->save();

        return redirect('admin/session')->with('message', 'session updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session $session)
    {
        $session->delete();

        return back()->with('message','session deleted.');
    }

    public function getSessions(Request $request) {

        $sessions = Session::where('type', 1)->paginate(12);

        return view('sessions', compact('sessions'));
    }

    public function getSession(Request $requst, Session $session) {
        return view('session', compact('session'));
    }

    public function indexJahadi()
    {
        $sessions = Session::where('type', 2)->paginate(12);

        return view('index_jahadi', compact('sessions'));
    }

    public function showJahadi(Session $session)
    {
        $session->load('photos', 'sounds', 'videos');

        return view('show_jahadi', compact('session'));
    }

    public function togglePublish(Session $session)
    {
        if($session->published == 1) {
            $session->published = 0;
            $session->save();
            return back()->with('message', 'جلسه از حالت انتشار خارج شد.');

        }else {
            $session->published = 1;
            $session->save();
            return back()->with('message', 'جلسه انتشار یافت.');
        }

    }
}
