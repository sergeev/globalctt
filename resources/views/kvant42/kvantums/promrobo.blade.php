                <!-- Modal robo -->
                <div class="modal fade" id="roboModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Робоквантум</h5>
                                {{-- <button type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> --}}
                            </div>
                            <div class="modal-body">

                                <div class="card text-center">
                                    <div class="card-header">
                                        <p class="description">Конструированию механизмов, разработке мобильных роботов
                                            и простейших аналогов промышленных роботов. Программированию роботов на
                                            различных языках программирования.
                                            Программированию роботов на различных языках программирования.</p>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">216</h5>
                                        <p class="card-text">Учебных часа в программе.</p>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">10+</h5>
                                        <p class="card-text">Возрастная категория.</p>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">12-14</h5>
                                        <p class="card-text">Количество обучающихся в группе.</p>
                                    </div>
                                    <div class="card-footer text-muted">
                                        {{-- Статистика заполняемости от максемальной,
                                        когда 100 квантум закрыт! --}}
                                        <h6>Наполняемость</h6>
                                        @foreach ($kvantums as $key => $kvantum)
                                            @if ($kvantum->kvantum_id == '2')
                                                @if ($kvantum->kvantum_status == '1')
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Если полоска достигнет 100% квантум будет закрыт"
                                                            role="progressbar" style="width:{{ $promrobo->id }}%">
                                                            {{ $promrobo->id }}
                                                        </div>
                                                    </div>

                                                @elseif($kvantum->kvantum_status == '0')
                                                    <div class="p-3 mb-2 bg-warning text-dark">Квантум закрыт для
                                                        зачисления!</div>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <!-- button type="button" class="btn btn-success">Записаться</button> -->
                                @foreach ($kvantums as $key => $kvantum)
                                    @if ($kvantum->kvantum_id == '2')
                                        @if ($kvantum->kvantum_status == '1')
                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#joinModal"
                                                data-whatever="@getbootstrap">Записаться</button>
                                        @elseif($kvantum->kvantum_status == '0')
                                            <button type="button" class="btn btn-secondary" disabled>Записаться</button>
                                        @endif
                                    @endif
                                @endforeach
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#calendarModalCenterPromroboTeacherShow">Расписание</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal Load teachers Promrobo -->
                <div class="modal bd-example-modal-lg" id="calendarModalCenterPromroboTeacherShow" tabindex="-1"
                    role="dialog" aria-labelledby="calendarModalCenterPromroboTeacherShow" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Расписание Промробо</h5>
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
                                                @if ($timetable->kvantum_name == 'Робоквантум')
                                                    <td>
                                                        <a data-toggle="modal"
                                                            data-target="#calendarModalCenterPromrobo">{{ $timetable->teacher_full_name }}</a>
                                                    </td>
                                            </tr>
                                        @endif
                                        @endforeach
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Calendar Promrobo -->
                <div class="modal bd-example-modal-lg" id="calendarModalCenterPromrobo" tabindex="-1" role="dialog"
                    aria-labelledby="calendarModalCenterPromrobo" aria-hidden="true">
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
                                            {{-- <th>Педагог</th>
                                            --}}
                                            <th>День недели</th>
                                            <th>Время</th>
                                            <th>Группа</th>
                                        </tr>
                                        @foreach ($timetables as $key => $timetable)
                                            <tr>
                                                @if ($timetable->kvantum_name == 'Робоквантум')
                                                    {{-- <td>
                                                        {{ $timetable->teacher_full_name }}
                                                    </td>
                                                    --}}
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
                                                    <td width="50%">{!! $timetable->week_time !!}</td>
                                                    <td>{!! $timetable->week_group_id !!}</td>
                                            </tr>
                                        @endif
                                        @endforeach
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
