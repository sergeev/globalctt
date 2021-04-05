<?php

use Illuminate\Database\Seeder;
use App\Settings;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::truncate();
        DB::table('settings')->truncate();

        // config for site modules
        // slider show
        Settings::create([
            'id' => '1',
            'module_name' => 'Слайдер',
            'status' => '1',
            'access' => 'admin',
        ]);

        // timetable show
        Settings::create([
            'id' => '2',
            'module_name' => 'Расписание',
            'status' => '1',
            'access' => 'admin',
        ]);

        // event show
        Settings::create([
            'id' => '3',
            'module_name' => 'События',
            'status' => '1',
            'access' => 'admin',
        ]);

        // gallery show
        Settings::create([
            'id' => '4',
            'module_name' => 'Галерея',
            'status' => '1',
            'access' => 'admin',
        ]);

        // team show
        Settings::create([
            'id' => '5',
            'module_name' => 'Команда',
            'status' => '1',
            'access' => 'admin',
        ]);
    }
}
