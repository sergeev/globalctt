<div class="modal fade" id="vrarModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">VR/AR</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <div class="card text-center">
                <div class="card-header">
                    <p class="description">Технологии виртуальной и дополненной реальности
                        основываются на разработках в разных отраслях науки и техники и
                        многочисленных исследованиях по тематике VR/AR. Освоение и овладение
                        навыками этих технологий не только расширит кругозор будущего специалиста,
                        но и, безусловно, положительно скажется на его будущей конкурентоспособности
                        в условиях динамичных и постоянных изменений рынка труда.</p>
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
                    @if ($kvantum->kvantum_id == '6')
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                data-toggle="tooltip" data-placement="top"
                                title="Если полоска достигнет 100% квантум будет закрыт" role="progressbar"
                                style="width:{{ $nano_k->id }}%">
                                {{ $nano_k->id }}</div>
                        </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <!-- button type="button" class="btn btn-success">Записаться</button> -->
            <button type="button" class="btn btn-success" data-toggle="modal"
                data-target="#joinModal" data-whatever="@getbootstrap">Записаться</button>
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#calendarModalCenterVRAR">Расписание</button>
        </div>
    </div>
</div>
</div>

<!-- Modal Calendar VR/AR-квантум -->
<div class="modal fade" id="calendarModalCenterVRAR" tabindex="-1" role="dialog"
    aria-labelledby="calendarModalCenterVRAR" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Расписание VR/AR-квантум</h5>
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
                                @if ($timetable->kvantum_name == 'VR/AR-квантум')
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