<div class="modal fade" id="nanoModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Наноквантум</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card text-center">
                    <div class="card-header">
                        <p class="description">Лаборатория Наноквантума оснащена современными приборами,
                            позволяющими синтезировать, модифицировать и изучать материалы на микро- и
                            наноуровнях. Учащиеся могут предложить свои идеи технологического применения
                            различных материалов, методов их получения или функционального улучшения.
                        </p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">216</h5>
                        <p class="card-text">Учебных часа в программе.</p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">14+</h5>
                        <p class="card-text">Возрастная категория.</p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">8-15</h5>
                        <p class="card-text">Количество обучающихся в группе.</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{-- Статистика заполняемости от максемальной,
                        когда 100 квантум закрыт! --}}
                        <h6>Наполняемость</h6>
                        @foreach ($kvantums as $key => $kvantum)
                            @if ($kvantum->kvantum_id == '5')
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
                <div class="col text-center">
                    {{-- button --}}
                    @foreach ($kvantums as $key => $kvantum)
                        @if ($kvantum->kvantum_id == '5')
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
