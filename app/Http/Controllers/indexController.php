<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class indexController extends Controller
{
	public function default()
	{
    $events = Event::latest()->paginate(6);
        return view('kvant42.index', compact('events'))->with(['menu_color_' => '#385E9D',
                                      // Social Links
                                      'title_page' => 'Кванториум 42 - Новокузнецк',
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
                                      'i', (request()->input('page', 1) - 1) * 5
                                  ]);
    }
    
    public function loader()
    {
        return view('kvant42.loader');
    }
}