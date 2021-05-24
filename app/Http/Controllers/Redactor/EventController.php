<?php

namespace App\Http\Controllers\Redactor;

use App\User;
use App\Role;
use App\Event;
use Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $student_checked_ok = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
            ->first();

        $student_checked_bad = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
            ->first();

        //$events = Event::where('id',$id)->first();
        $events = Event::latest()->paginate(20);
        $events_all = Event::all();

        return view('admin.redactor.index', compact('events', 'events_all', 'student_checked_ok', 'student_checked_bad'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student_checked_ok = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
            ->first();

        $student_checked_bad = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
            ->first();

        $users = User::pluck('name', 'name')->all();

        return view('admin.redactor.create', compact('users', 'student_checked_ok', 'student_checked_bad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Получаем автора из базы TODO - наверное не самый верный способ!
        $user = Auth::user()->name;

        $rules = [
            'title' => 'required',
            'link_images_1' => 'required',
            'content_main_page' => 'required|max:500',
            'content' => 'required|max:5000',
            'published_date_start' => 'required',
            //'author' => 'required',
            //'published' => 'required',
            //'published_slider_status' => 'required'
        ];

        $messages = [
            'title.required' => 'Введите название события',
            'content_main_page.required' => 'Введите ссылку на изображение',
            'content_main_page.max' => 'Вы ввели более 500 символов!',
            'content.required' => 'Введите текст статьи',
            'content.max' => 'Введите менее 5000 символов!',
            'published_date_start.required' => 'Введите дату публикации',
            //'published.required' => 'Вы не опублековали статью!',
            //'published_slider_status.required' => 'Вы не опублековали статью в слайдер!'
        ];

        $this->validate($request, $rules, $messages);

        $event = new Event();
        $event->title = $request->get('title');
        $event->link_images_1 = $request->get('link_images_1');
        $event->content_main_page = $request->get('content_main_page');
        $event->content = $request->get('content');
        $event->published = $request->get('published');
        $event->published_slider_status = $request->get('published_slider_status');
        $event->published_date_start = $request->get('published_date_start');
        $event->published_date_end = $request->get('published_date_end');
        $event->content_access = $request->get('content_access');
        $event->author = $user;
        $event->save();

        //Event::create($request->all());
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
//        if(Cookie::get($post->id)!=''){
//            Cookie::set('$post->id', '1', 60);
//            $post->incrementReadCount();

        $event->increment('view_count', + 1);

        $student_checked_ok = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
            ->first();

        $student_checked_bad = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
            ->first();

        return view('admin.redactor.show', compact('event', 'student_checked_ok', 'student_checked_bad', $event));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student_checked_ok = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '1' then 1 end) as id")
            ->first();

        $student_checked_bad = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_checked = '0' then 1 end) as id")
            ->first();

        // AuthServiceProvider ->
        if (Gate::denies('manage-events')) {
            return redirect(route('admin.redactor.index'));
        }

        $users = User::pluck('name', 'name')->all();
        $event = Event::find($id);

        return view('admin.redactor.edit', compact('event', 'users', 'student_checked_ok', 'student_checked_bad'));
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
            'title' => 'required',
            'content_main_page' => 'required',
            'content' => 'required'
        ]);

        // Получаем автора из базы TODO - наверное не самый верный способ!
        $user = Auth::user()->name;

        $event = Event::find($id);
        $event->title = $request->get('title');
        $event->link_images_1 = $request->get('link_images_1');
        $event->content_main_page = $request->get('content_main_page');
        $event->content = $request->get('content');
        $event->slug = $request->get('slug');
        $event->author = $user;
        $event->organization_show = $request->get('organization_show');
        $event->published = $request->get('published');
        $event->published_slider_status = $request->get('published_slider_status');
        $event->published_date_start = $request->get('published_date_start');
        $event->published_date_end = $request->get('published_date_end');
        $event->content_access = $request->get('content_access');

        if ($event->save()) {
            $request->session()->flash('success', $event->title . ' успешно обновлен');
        } else {
            $request->session()->flash('error', 'Event not update, error message');
        }

        return redirect()->route('events.events.index');
    }

    public function eventPublished($id)
    {
        Event::whereid($id)->update([
            'published' => 1
        ]);
    }

    public function eventUnPublished($id)
    {
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
        if (Gate::denies('manage-events')) {
            return redirect(route('admin.redactor.index'));
        }

        if ($event->delete()) {
            $request->session()->flash('success', $event->title . ' был удален успешно');
        } else {
            $request->session()->flash('error', 'Event not delete, error message');
        }

        return redirect()->route('events.events.index');
    }
}
