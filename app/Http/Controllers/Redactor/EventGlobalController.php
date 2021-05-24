<?php

namespace App\Http\Controllers\Redactor;

use App\User;
use App\Role;
use App\Event;
use Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventGlobalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$events = Event::where('id',$id)->first();
        // Количество вывода новостей на одной странице
        $events = Event::latest()->paginate(10);
        $events_all = Event::all();

        return view('events.global.index', compact('events', 'events_all'))
            ->with([
                'menu_color_' => '#385E9D',
                // Social Links
                'title_page' => 'Кванториум 42 - Новости',
                // fb link
                'fb_link' => '',
                // twitter
                'twitter_link' => '',
                // Google+
                'google_plus_link' => '',
                // linkedin
                'linkedin_link' => '',
                // instagram link
                'instagram_link' => 'https://www.instagram.com/kvantorium42_novokuznetsk',
                // VK
                'vk_link' => 'https://vk.com/kvantorium42_novokuznetsk',
                'i', (request()->input('page', 1) - 1) * 3
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        // views link resource/events/global/show.blade.php
        //$event = Event::find($id);
        $event->increment('view_count', + 1);

        return view('events.global.show', compact('event'));
    }
}
