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
                <div class="col text-center">
                    {{-- button --}}
                    @foreach ($kvantums as $key => $kvantum)
                        @if ($kvantum->kvantum_id == '1')
                            @if ($kvantum->kvantum_status == '1')
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=""
                                    data-whatever="@getbootstrap">Записаться</button>
                            @elseif($kvantum->kvantum_status == '0')
                                <button type="button" class="btn btn-secondary" disabled>Квантум закрыт для
                                    зачисления</button>
                            @endif
                        @endif
                    @endforeach
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" <i class="fa fa-window-close"></i></i></span>
                    </button>
            </div>
            </div>
        </div>
    </div>
</div>
