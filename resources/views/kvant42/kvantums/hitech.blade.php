<div class="modal fade" id="hitechModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Хайтек</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card text-center">
                    <div class="card-header">
                        <p class="description">Знакомство с основами ТРИЗ и инженерии; изучение основ
                            проектирования в САПР и созданию 2D и 3D моделей, работы на лазерном и
                            аддитивном оборудовании, станках с ЧПУ (фрезерные станки); получение навыков
                            работы с ручным инструментом, электронными компонентами; навыков
                            деревообработки.</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">72</h5>
                        <p class="card-text">Учебных часа в программе.</p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">10+</h5>
                        <p class="card-text">Возрастная категория.</p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">10</h5>
                        <p class="card-text">Количество обучающихся в группе.</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{-- Статистика заполняемости от максемальной,
                        когда 100 квантум закрыт! --}}
                        <h6>Наполняемость</h6>
                        @foreach ($kvantums as $key => $kvantum)
                            @if ($kvantum->kvantum_id == '1')
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Если полоска достигнет 100% квантум будет закрыт" role="progressbar"
                                        style="width:{{ $hitechs->id }}%">
                                        {{ $hitechs->id }}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <!-- button type="button" class="btn btn-success">Записаться</button> -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#joinModal"
                    data-whatever="@getbootstrap">Записаться</button>
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#calendarModalCenterHitech">Расписание</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Calendar HiTech-квантум -->
<div class="modal fade" id="calendarModalCenterHitech" tabindex="-1" role="dialog" aria-labelledby="calendarModalCenterHitech"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Расписание ХайТек</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <table class="table table-responsive">
                        <tr>
                            <th>Педагог</th>
                            <th>День недели</th>
                            <th>Время</th>
                            <th>Группа</th>
                        </tr>
                        @foreach ($timetables as $key => $timetable)
                            <tr>
                                @if ($timetable->kvantum_name == 'Хай-Тек')
                                    <td>{{ $timetable->teacher_full_name }}</td>
                                    <td>
                                        @if ($timetable->week_day == 'Понедельник')
                                            Понедельник
                                        @elseif($timetable->week_day == 'Вторник')
                                            Вторинк
                                        @elseif($timetable->week_day == 'Среда')
                                            Среда
                                        @elseif($timetable->week_day == 'Четверг')
                                            Четверг
                                        @elseif($timetable->week_day == 'Пятница')
                                            Пятница
                                        @elseif($timetable->week_day == 'Суббота')
                                            Суббота
                                        @elseif($timetable->week_day == 'Воскресенье')
                                            Воскресенье
                                        @else
                                            Расписание ещё не опубликовано
                                        @endif
                                    </td>
                                    <td>{!! $timetable->week_time !!}</td>
                                    <td>{!! $timetable->week_group_id !!}</td>
                            </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
</div>
