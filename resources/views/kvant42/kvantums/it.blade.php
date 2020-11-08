<div class="modal fade" id="itModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">IT-Квантум</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body">

                <div class="card text-center">
                    <div class="card-header">
                        <p class="description">Углубленное изучение программирования, сетевых
                            технологий. Революция в информационных технологиях — устойчивая платформа в
                            мировом рейтинге конкурентоспособности. Интеллектуальные системы и
                            технологии применяются для тиражирования профессионального опыта и решения
                            сложных научных, производственных и экономических задач. А интенсивность
                            развития сферы IТ — одно из приоритетных направлений развития России. В
                            рамках проектной траектории дети объединяются в команды IT-аналитиков: они
                            знакомятся с законодательством в сфере IT, получают представление об
                            ответственности в сфере информационной безопасности.</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">216</h5>
                        <p class="card-text">Учебных часа в программе.</p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">12+</h5>
                        <p class="card-text">Возрастная категория.</p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">12-15</h5>
                        <p class="card-text">Количество обучающихся в группе.</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{-- Статистика заполняемости от максемальной,
                        когда 100 квантум закрыт! --}}
                        <h6>Наполняемость</h6>
                        @foreach ($kvantums as $key => $kvantum)
                            @if ($kvantum->kvantum_id == '3')
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Если полоска достигнет 100% квантум будет закрыт" role="progressbar"
                                        style="width:{{ $it_k->id }}%">
                                        {{ $it_k->id }}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <!-- button type="button" class="btn btn-success">Записаться</button> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#joinModal"
                    data-whatever="@getbootstrap">Записаться</button>
                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#calendarModalCenterItTeacherShow">Расписание</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Load teachers it -->
<div class="modal bd-example-modal-lg" id="calendarModalCenterItTeacherShow" tabindex="-1" role="dialog"
    aria-labelledby="calendarModalCenterItTeacherShow" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Расписание IT-квантум
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <table class="table table-responsive">
                        <tr>
                            <th>Педагоги</th>
                        </tr>
                        <p>Нажмите на педагога чтобы узнать расписание</p>
                        @foreach ($timetables as $key => $timetable)
                            <tr>
                                @if ($timetable->kvantum_name == 'IT-квантум')
                                    <td>
                                        <a data-toggle="modal"
                                            data-target="#calendarModalCenterIt">{{ $timetable->teacher_full_name }}</a>
                                    </td>
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


<!-- Modal Calendar IT-квантум -->
<div class="modal fade" id="calendarModalCenterIt" tabindex="-1" role="dialog" aria-labelledby="calendarModalCenterIt"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Расписание педагога
                    {{ $timetable->teacher_full_name }}
                </h5>
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
                                @if ($timetable->kvantum_name == 'IT-квантум')
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
