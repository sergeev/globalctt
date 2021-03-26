<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Timetable;
use App\Kvantum;
use App\Teacher;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function
    default()
    {
        $kvantums = Kvantum::all();
        $totals = DB::table('students')->selectRaw('count(*) as total')->first();
        $timetables = Timetable::all();

        $itcube_stat = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when organization = '2' then 1 end) as id")
            ->first();

        $hitechs = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when inputsKvantum = 'Хай-Тек' then 1 end) as id")
            ->first();

        $promrobo = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when inputsKvantum = 'Робоквантум' then 1 end) as id")
            ->first();

        $it_k = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when inputsKvantum = 'IT-квантум' then 1 end) as id")
            ->first();

        $energy_k = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when inputsKvantum = 'Энерджиквантум' then 1 end) as id")
            ->first();

        $nano_k = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when inputsKvantum = 'Наноквантум' then 1 end) as id")
            ->first();

        $vr_ar_k = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when inputsKvantum = 'VR/AR-квантум' then 1 end) as id")
            ->first();

        $chess_k = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when inputsKvantum = 'Шахматная гостиная' then 1 end) as id")
            ->first();

        $maths_k = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when inputsKvantum = 'Математика' then 1 end) as id")
            ->first();

        $englisch_k = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when inputsKvantum = 'Английский язык' then 1 end) as id")
            ->first();

        $MVP = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_rang = '2' then 1 end) as id")
            ->first();

        $resident_evil = DB::table('students')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when student_rang = '1' then 1 end) as id")
            ->first();

        $teachers = Teacher::all();

        $events = Event::latest()->paginate(3);
        return view('kvant42.index', compact('events', 'timetables', 'totals', 'kvantums', 'promrobo', 'it_k', 'hitechs', 'energy_k', 'nano_k', 'vr_ar_k', 'chess_k', 'maths_k', 'englisch_k', 'resident_evil', 'MVP', 'teachers'))->with([
            'menu_color_' => '#385E9D',
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
