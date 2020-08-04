<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Student::truncate();
    	DB::table('students')->truncate();

    	Student::create([
            'organization' => '1',
            'inputsCertificate' => '9999999999',
            'name_1_ot' => 'Алиса Олеговна',
            'surname_1_fam' => 'Фролова',
            'inputEmail' => '9999999frolova@gmail.com',
            'childDateInput' => '',
            'gender' => '0',
            'inputsSchool' => 'СОШ 81',
            'inputsClass' => '5А',
            'inputsKvantum' => 'Хай-Тек',
            'teacherName' => 'Смагин Константин Николаевич',
            'groupTime' => '9.00',
            'inputsNameLegalRepresentative' => 'Фролова Ольга Николаевна',
            'NameLegalRepresentativeTelephone' => '+7 589 721 22 62',
            'inputsComments' => 'Можем ходить с утра',
            // Ранг, экспа, монеты
            'student_rang' => '0',
            'student_exp' => '0',
            'student_coin' => '0',
            // проверка студента 0 - нет 1 - да
            'student_checked' => '0',
            'student_deleted' => '0',
    	]);
	}
}
