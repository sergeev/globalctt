<div class="modal fade" id="energyModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Энерджиквантум</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card text-center">
                    <div class="card-header">
                        <p class="description">Фантастически дерзкая задача для инженеров XXI века –
                            научиться напрямую аккумулировать, сохранять и использовать солнечную
                            энергию, которая является первоисточником всех энергоносителей на нашей
                            планете. А одна из главных задач России в ближайшие 25 лет – тоже про
                            Энергию – это кардинальное повышении энергоэффективности экономики. Занятия
                            в Энерджиквантуме направлены на изучение основных направлений альтернативной
                            энергетики и практических навыков в этих областях, изучение принципов
                            создания современных транспортных средств на ее основе, приобретение знаний
                            по кинематической физике, физике химических источников тока,
                            материаловедению, освоение основ гидродинамики, электротехники, фотоники и
                            участия в проектных командах по этим направлениям.</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">144</h5>
                        <p class="card-text">Учебных часа в программе.</p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">14+</h5>
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
                            @if ($kvantum->kvantum_id == '4')
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Если полоска достигнет 100% квантум будет закрыт" role="progressbar"
                                        style="width:{{ $energy_k->id }}%">
                                        {{ $energy_k->id }}</div>
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
                    data-target="#calendarModalCenterEnergy">Расписание</button>
            </div>
        </div>
    </div>
</div>