<div class="modal fade" id="englishModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Английский язык</h5>
                {{-- <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body">

                <div class="card text-center">
                    <div class="card-header">
                        <p class="description">Занятия по направлению «Технический английский» обучают основам перевода
                            технических текстов по направлениям: робототехника, информационные и медиатехнологии,
                            промышленный дизайн и производство. Учащиеся научатся грамотно употреблять технические
                            термины, переводить сложные тексты. В рамках обучения проходят занятия по аудированию
                            (слушание презентаций выдающихся изобретателей XX-XXI вв. – Стив Джоббс, Билл Гейтс и др.).
                            По итогам курса ребята научатся делать презентации своих разработок на английском языке и
                            смогут достойно представлять свои разработки крупнейшим производителям мира.</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">36</h5>
                        <p class="card-text">Учебных часа в программе.</p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">7+</h5>
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
                            @if ($kvantum->kvantum_id == '9')
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Если полоска достигнет 100% квантум будет закрыт" role="progressbar"
                                        style="width:{{ $englisch_k->id }}%">
                                        {{ $englisch_k->id }}
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
                        @if ($kvantum->kvantum_id == '9')
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
