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
                <div class="col text-center">
                    {{-- button --}}
                    @foreach ($kvantums as $key => $kvantum)
                        @if ($kvantum->kvantum_id == '3')
                            @if ($kvantum->kvantum_status == '1')
{{--                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=""--}}
{{--                                    data-whatever="@getbootstrap">Записаться</button>--}}
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
