<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use App\Kvantum;
use App\Timetable;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TimetableGlobalController extends Controller
{
	public function index()
	{
        //$events = Event::where('id',$id)->first();
        $timetable = Timetable::all();

        return view('timetables.index',compact('timetable'))
           ->with(['menu_color_' => '#385E9D',
                                      // Social Links
                                      'title_page' => 'Кванториум 42 - Расписание занятий',
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

	public function show(Timetable $timetable)
	{
		return view('timetables.showtoall', compact('timetable'));
	}
}
