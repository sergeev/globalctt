<?php

namespace App\Http\Controllers\Redactor;

use App\User;
use App\Role;
use App\Event;
use Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        // Проверка на авторизацию к странице admin/users
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->paginate(3);
        return view('admin.redactor.index',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.redactor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required'
            // 'author' =>$user->this;
            ]);

        Event::create($request->all());

        return redirect()->route('events.events.index')->with('success', 'Событие было добавлено успешно.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.redactor.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        // AuthServiceProvider ->
        if(Gate::denies('manage-events')){
            return redirect(route('admin.redactor.index'));
        }

        $event = Event::pluck('title', 'content', 'author')->all();

        $roles = Role::all();

        // return view('admin.redactor.edit')->with([
        //     'title' => $title,
        //     'content' => $content
        // ]);
        return view('admin.redactor.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $title->title = $request->title;
        $content->content = $request->content;
        
        if($event->save()){
            $request->session()->flash('success', $event->title . ' has been update');
        }else{
            $request->session()->flash('error', 'Event not update, error message');
        }

        return redirect()->route('events.events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Event $event)
    {
        // AuthServiceProvider ->
        if(Gate::denies('manage-events')){
            return redirect(route('admin.redactor.index'));
        }

        if($event->delete()){
            $request->session()->flash('success', $event->title . ' has been delete');
        }else{
            $request->session()->flash('error', 'Event not delete, error message');
        }

        return redirect()->route('events.events.index');
    }
}
