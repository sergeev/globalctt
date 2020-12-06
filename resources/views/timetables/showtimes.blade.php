<html lang="{{ app()->getLocale() }}">

<body>
    <main id="main">
        <div class="container">
            <header class="section-header">
                {{-- <h3>Расписания занятий кванториума 42 Новокузнецк</h3>
                --}}
            </header>
            <table class="table table-bordered table-responsive">
                <tr>
                    <th rowspan="2" class="first">Ф.И.О / Направление</th>
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
                        <td rowspan="1" class="first">{{ $timetable->teacher_full_name }} /
                            ({{ $timetable->kvantum_name }})</td>
                        <td>
                            @if ($timetable->week_day == 'Понедельник')
                                @if ($timetable->organization == 1)
                                    {{ $timetable->week_time }}
                                @else
                                    Нет занятий
                                @endif
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Вторник')
                                @if ($timetable->organization == 1)
                                    {{ $timetable->week_time }}
                                @else
                                    Нет занятий
                                @endif
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Среда')
                                @if ($timetable->organization == 1)
                                    {{ $timetable->week_time }}
                                @else
                                    Нет занятий
                                @endif
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Четверг')
                                @if ($timetable->organization == 1)
                                    {{ $timetable->week_time }}
                                @else
                                    Нет занятий
                                @endif
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Пятница')
                                @if ($timetable->organization == 1)
                                    {{ $timetable->week_time }}
                                @else
                                    Нет занятий
                                @endif
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Суббота')
                                @if ($timetable->organization == 1)
                                    {{ $timetable->week_time }}
                                @else
                                    Нет занятий
                                @endif
                            @else
                                Нет занятий
                            @endif
                        </td>
                        <td>
                            @if ($timetable->week_day == 'Воскресенье')
                                @if ($timetable->organization == 1)
                                    {{ $timetable->week_time }}
                                @else
                                    Нет занятий
                                @endif
                            @else
                                Нет занятий
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
            {{-- @foreach ($timetables as $timetable)
                <p>Последнее обновление {{ $timetable->updated_at }}</p>
            @endforeach --}}
        </div>
    </main>
</body>

</html>
