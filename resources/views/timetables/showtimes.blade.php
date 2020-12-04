<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Кванториум 42 Новокузнецк - Расписание занятий</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <main id="main">
        <div class="container">
            <header class="section-header">
                <h3>Расписания занятий кванториума 42 Новокузнецк</h3>
            </header>
            <table class="table table-bordered table-responsive">
                <tr>
                    <th rowspan="2" class="first">Ф.И.О</th>
                    <th colspan="7">Дни / время проведения занятий</th>
                </tr>
                <tr>
                    <td class="first">Понедельник</td>
                    <td class="first">Вторник</td>
                    <td class="first">Среда</td>
                    <td class="first">Четверг</td>
                    <td class="first">Пятница</td>
                    <td class="first">Суббота</td>
                    <td class="first">Воскресенье</td>
                </tr>
                @foreach ($timetables as $key => $timetable)
                    <tr>
                        <td rowspan="1" class="first">{{ $timetable->teacher_full_name }} ({{ $timetable->kvantum_name }})</td> 
                        <td>
                            @if ($timetable->week_day == 'Понедельник')
                                {{ $timetable->week_time }}
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Вторник')
                                {{ $timetable->week_time }}
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Среда')
                                {{ $timetable->week_time }}
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Четверг')
                                {{ $timetable->week_time }}
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Пятница')
                                {{ $timetable->week_time }}
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Суббота')
                                {{ $timetable->week_time }}
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Воскресенье')
                                {{ $timetable->week_time }}
                            @else
                                Нет занятий
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
</body>

</html>
