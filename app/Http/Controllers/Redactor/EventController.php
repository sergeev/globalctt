<?php

namespace App\Http\Controllers\Redactor;

use App\User;
use App\Role;
use App\Event;
use Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //$events = Event::where('id',$id)->first();
        $events = Event::latest()->paginate(20);
        $events_all = Event::all();

        return view('admin.redactor.index',compact('events', 'events_all'))
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
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'content_main_page' => 'required',
            'content' => 'required'
            // 'author' =>$user->this;
            ]);

            $event = new Event([
                'title' => $request->get('title'),
                'content_main_page' => $request->get('content_main_page'),
                'content' => $request->get('content')
            ]);

            $event->save();

        //Event::create($request->all()); // TODO

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
    public function edit($id)
    {
        // AuthServiceProvider ->
        if(Gate::denies('manage-events')){
            return redirect(route('admin.redactor.index'));
        }

        $event = Event::find($id);
        return view('admin.redactor.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=> 'required',
            'content_main_page' => 'required',
            'content'=>'required'
        ]);

        $event = Event::find($id);
        $event->title = $request->get('title');
        $event->content_main_page = $request->get('content_main_page');
        $event->content = $request->get('content');
        $event->slug = $request->get('slug');
        $event->author = $request->get('author');

        //$event->author = $request->get($user->this);
        $event->published = $request->get('published');
        $event->published_slider_status = $request->get('published_slider_status');

        if($event->save()){
            $request->session()->flash('success', $event->title . ' has been update');
        }else{
            $request->session()->flash('error', 'Event not update, error message');
        }

        return redirect()->route('events.events.index');
    }

    public function eventPublished($id){
        Event::whereid($id)->update([
            'published' => 1
        ]);
    }

    public function eventUnPublished($id){
        Event::whereid($id)->update([
            'published' => 0
        ]);
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
