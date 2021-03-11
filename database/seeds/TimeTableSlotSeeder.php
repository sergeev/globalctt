<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TimeTableSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timetable_slots')->insert([
            'slot_id' => '1',
            'slot_time_set' => '09:00-09:40'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '2',
            'slot_time_set' => '09:45-10:25'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '3',
            'slot_time_set' => '10:30-11:10'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '4',
            'slot_time_set' => '11:20-12:00'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '5',
            'slot_time_set' => '12:05-12:45'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '6',
            'slot_time_set' => '12:50-13:30'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '7',
            'slot_time_set' => '13:40-14:20'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '8',
            'slot_time_set' => '14:25-15:05'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '9',
            'slot_time_set' => '15:10-15:50'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '10',
            'slot_time_set' => '09:00-09:40'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '11',
            'slot_time_set' => '09:00-09:40'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '12',
            'slot_time_set' => '09:00-09:40'
        ]);

        DB::table('timetable_slots')->insert([
            'slot_id' => '13',
            'slot_time_set' => '09:00-09:40'
        ]);
    }
}
