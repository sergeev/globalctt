<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
        // 'organization' - организация (Меридиан = 0 | Кванториум = 1 | ИТКуб = 2) 
         // 'inputsCertificate' - Номер сертификата в базе 
         // 'name_1_ot' - Имя Отчество (ребенка):
         // 'surname_1_fam' - Фамилия (ребенка):
         // 'inputEmail', - Эл.почта:
         // 'childDateInput' - Дата рождения:(ребенка)
         // 'inputsSchool' - Учебное заведение:
         // 'inputsClass' - Класс:
         // 'inputsKvantum' -Выбор направления обучения: (?? = 0|Промробо = 1 | Хай-Тек = 2|Нано = 3| ИТ = 4|Энерджи = 5| AR- VR = 6|Маломобильные = 7||)
         // 'teacherName' - Выбор педагога:
         // 'groupTime' - Группа:
         // 'inputsNameLegalRepresentative' - ФИО родителя (законного представителя):
         // 'NameLegalRepresentativeTelephone' - Телефон родителя (законного представителя):
         // 'inputsComments' - Комментарий(заметка)
         // 'student_rang' - Ранг (нужен для внутренних целей) (Нет ранга - 0 |Резидент = 1| MVP = 2||)
         // 'student_exp' - Опыт (нужен для внутренних целей)
         // 'student_coin' - Монеты (нужен для внутренних целей)
         // 'student_checked' - Проверка (Проверен = 1|На рассмотрении =  0|Удаленный =  3)
         // 'student_deleted' - (Не удален = 0| Удален = 1)

    protected $fillable = [
        'organization',
        'inputsCertificate',
        'name_1_ot',
        'surname_1_fam',
        'inputEmail',
        'childDateInput',
        'gender',
        'inputsSchool',
        'inputsClass',
        'inputsKvantum',
        'teacherName',
        'groupTime',
        'inputsNameLegalRepresentative',
        'NameLegalRepresentativeTelephone',
        'inputsComments',
        'student_rang',
        'student_exp',
        'student_coin',
        'student_checked',
        'student_deleted'
    ];
}
