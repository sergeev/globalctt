<?php

namespace App\Http\Controllers\Redactor;

use App\User;
use App\Role;
use App\Event;
use Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Itcube42EventGlobalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$events = Event::where('id',$id)->first();
        $events = Event::latest()->paginate(4);
        $events_all = Event::all();

        return view('events.itcube42.index', compact('events', 'events_all'))
            ->with([
                'i', (request()->input('page', 1) - 1) * 5
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event, $id)
    {
        $event = Event::find($id);
        return view('events.itcube42.show', compact('event'));
    }
}
