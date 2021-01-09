<html lang="{{ app()->getLocale() }}">

<body>
    <main id="main">
        <div class="container">
            <header class="section-header">
                {{-- <h3>Расписания занятий кванториума 42 Новокузнецк</h3>
                --}}
            </header>

            <div class="row">
                <div class="col-sm">
                    <div class="card-header">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="modal"
                                data-target="#ModalIT" aria-expanded="true" aria-controls="ModalIT">
                                <div class="col text-center">
                                    <i class="fa fa-mouse">ИТ квантум</i>
                                </div>
                            </button>
                        </h2>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card-header" id="headingTwo>
                        <h2 class=" mb-0">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalPobo">
                            <div class="col text-center">
                                <i class="fa fa-mouse">Робоквантум</i>
                            </div>
                        </button>
                        </h2>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#timetableShowIT" aria-expanded="true" aria-controls="timetableShowIT">
                                <div class="col text-center">
                                    <i class="fa fa-mouse">Хай-Тек Цех</i>
                                </div>
                            </button>
                        </h2>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#timetableShowIT" aria-expanded="true" aria-controls="timetableShowIT">
                                <div class="col text-center">
                                    <i class="fa fa-mouse">Хай-Тек Цех 2</i>
                                </div>
                            </button>
                        </h2>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#timetableShowIT" aria-expanded="true" aria-controls="timetableShowIT">
                                <div class="col text-center">
                                    <i class="fa fa-mouse">Хай-Тек Цех 2</i>
                                </div>
                            </button>
                        </h2>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#timetableShowIT" aria-expanded="true" aria-controls="timetableShowIT">
                                <div class="col text-center">
                                    <i class="fa fa-mouse">Хай-Тек Цех 2</i>
                                </div>
                            </button>
                        </h2>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#timetableShowIT" aria-expanded="true" aria-controls="timetableShowIT">
                                <div class="col text-center">
                                    <i class="fa fa-mouse">Хай-Тек Цех 2</i>
                                </div>
                            </button>
                        </h2>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#timetableShowIT" aria-expanded="true" aria-controls="timetableShowIT">
                                <div class="col text-center">
                                    <i class="fa fa-mouse">Хай-Тек Цех 2</i>
                                </div>
                            </button>
                        </h2>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#timetableShowIT" aria-expanded="true" aria-controls="timetableShowIT">
                                <div class="col text-center">
                                    <i class="fa fa-mouse">Хай-Тек Цех 2</i>
                                </div>
                            </button>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="ModalIT" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Расписание - IT-квантум</h5>
                        </div>
                        @foreach ($timetables as $key => $timetable)
                            @if ($timetable->kvantum_name == 'IT-квантум')

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

                                    <tr>
                                        <td rowspan="1" class="first">{{ $timetable->teacher_full_name }} /
                                            ({{ $timetable->kvantum_name }})</td>
                                        <td>
                                            @if ($timetable->week_day_1 == 1)
                                                @if ($timetable->organization == 1)
                                                {!! str_replace("\n", '<br>', $timetable->week_time_day_1) !!}
                                                @else
                                                    Нет занятий
                                                @endif
                                            @else ($timetable->week_day_1 == 0)
                                                Нет занятий
                                            @endif
                                        </td>
                                        <td>
                                            @if ($timetable->week_day_2 == 1)
                                                @if ($timetable->organization == 1)
                                                    {!! str_replace("\n", '<br>', $timetable->week_time_day_2) !!}
                                                @else
                                                    Нет занятий
                                                @endif
                                            @else ($timetable->week_day_2 == 0)
                                                Нет занятий
                                            @endif
                                        </td>
                                        <td>
                                            @if ($timetable->week_day_3 == 1)
                                                @if ($timetable->organization == 1)
                                                    {!! str_replace("\n", '<br>', $timetable->week_time_day_3) !!}
                                                @else
                                                    Нет занятий
                                                @endif
                                            @else ($timetable->week_day_3 == 0)
                                                Нет занятий
                                            @endif
                                        </td>
                                        <td>
                                            @if ($timetable->week_day_4 == 1)
                                                @if ($timetable->organization == 1)
                                                    {!! str_replace("\n", '<br>', $timetable->week_time_day_4) !!}
                                                @else
                                                    Нет занятий
                                                @endif
                                            @else ($timetable->week_day_4 == 0)
                                                Нет занятий
                                            @endif
                                        </td>
                                        <td>
                                            @if ($timetable->week_day_5 == 1)
                                                @if ($timetable->organization == 1)
                                                    {!! str_replace("\n", '<br>', $timetable->week_time_day_5) !!}
                                                @else
                                                    Нет занятий
                                                @endif
                                            @else ($timetable->week_day_5 == 0)
                                                Нет занятий
                                            @endif
                                        </td>
                                        <td>
                                            @if ($timetable->week_day_6 == 1)
                                                @if ($timetable->organization == 1)
                                                    {!! str_replace("\n", '<br>', $timetable->week_time_day_6) !!}
                                                @else
                                                    Нет занятий
                                                @endif
                                            @else ($timetable->week_day_6 == 0)
                                                Нет занятий
                                            @endif
                                        </td>
                                        <td>
                                            @if ($timetable->week_day_7 == 1)
                                                @if ($timetable->organization == 1)
                                                    {!! str_replace("\n", '<br>', $timetable->week_time_day_7) !!}
                                                @else
                                                    Нет занятий
                                                @endif
                                            @else ($timetable->week_day_7 == 0)
                                                Нет занятий
                                            @endif
                                        </td>
                                    </tr>

                                </table>

                            @else ($timetable->kvantum_name == '')

                            @endif
                        @endforeach

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Promrobo show --}}
        <div id="timetableShowPromrobo" class="collapse" aria-labelledby="headingTwo"
            data-parent="#timetableShowPromrobo">
            @foreach ($timetables as $key => $timetable)
                @if ($timetable->kvantum_name == 'Робоквантум')
                    <div class="card-body">
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

                            <tr>
                                <td rowspan="1" class="first">{{ $timetable->teacher_full_name }} /
                                    ({{ $timetable->kvantum_name }})</td>
                                <td>
                                    @if ($timetable->week_day_1 == 1)
                                        @if ($timetable->organization == 1)
                                            {{ $timetable->week_time_day_1 }}
                                        @else
                                            Нет занятий
                                        @endif
                                    @else ($timetable->week_day_1 == 0)
                                        Нет занятий
                                    @endif
                                </td>
                                <td>
                                    @if ($timetable->week_day_2 == 1)
                                        @if ($timetable->organization == 1)
                                            {{ $timetable->week_time_day_2 }}
                                        @else
                                            Нет занятий
                                        @endif
                                    @else ($timetable->week_day_2 == 0)
                                        Нет занятий
                                    @endif
                                </td>
                                <td>
                                    @if ($timetable->week_day_3 == 1)
                                        @if ($timetable->organization == 1)
                                            {{ $timetable->week_time_day_3 }}
                                        @else
                                            Нет занятий
                                        @endif
                                    @else ($timetable->week_day_3 == 0)
                                        Нет занятий
                                    @endif
                                </td>
                                <td>
                                    @if ($timetable->week_day_4 == 1)
                                        @if ($timetable->organization == 1)
                                            {{ $timetable->week_time_day_4 }}
                                        @else
                                            Нет занятий
                                        @endif
                                    @else ($timetable->week_day_4 == 0)
                                        Нет занятий
                                    @endif
                                </td>
                                <td>
                                    @if ($timetable->week_day_5 == 1)
                                        @if ($timetable->organization == 1)
                                            {{ $timetable->week_time_day_5 }}
                                        @else
                                            Нет занятий
                                        @endif
                                    @else ($timetable->week_day_5 == 0)
                                        Нет занятий
                                    @endif
                                </td>
                                <td>
                                    @if ($timetable->week_day_6 == 1)
                                        @if ($timetable->organization == 1)
                                            {{ $timetable->week_time_day_6 }}
                                        @else
                                            Нет занятий
                                        @endif
                                    @else ($timetable->week_day_6 == 0)
                                        Нет занятий
                                    @endif
                                </td>
                                <td>
                                    @if ($timetable->week_day_7 == 1)
                                        @if ($timetable->organization == 1)
                                            {{ $timetable->week_time_day_7 }}
                                        @else
                                            Нет занятий
                                        @endif
                                    @else ($timetable->week_day_7 == 0)
                                        Нет занятий
                                    @endif
                                </td>
                            </tr>

                        </table>
                    </div>
                @else ($timetable->kvantum_name == '')

                @endif
            @endforeach
        </div>


        {{-- @foreach ($timetables as $timetable)
            <p>Последнее обновление {{ $timetable->updated_at }}</p>
        @endforeach --}}
        </div>
    </main>
</body>

</html>
