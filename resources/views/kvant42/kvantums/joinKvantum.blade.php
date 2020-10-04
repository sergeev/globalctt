<div class="modal fade" id="joinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Записаться</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card text-center">
                    <div class="card-header">
                        <p class="description">Научно-технический прогресс не стоит на месте:
                            высокоточное оборудование поражает своими результатами, новые роботы
                            заменяют людей на производствах, транспорт может передвигаться сам, а
                            прогуляться по Парижу стало возможным, не выходя из собственного дома, но
                            одно остается неизменным. Чтобы достичь высоких результатов в инженерной
                            области, необходимо знание математики.</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">36</h5>
                        <p class="card-text">Учебных часа в программе.</p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">12+</h5>
                        <p class="card-text">Возрастная категория.</p>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">12</h5>
                        <p class="card-text">Количество обучающихся в группе.</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{-- Статистика заполняемости от максемальной,
                        когда 100 квантум закрыт! --}}
                        <h6>Наполняемость</h6>
                        @foreach ($kvantums as $key => $kvantum)
                            @if ($kvantum->kvantum_id == '8')
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        data-toggle="tooltip" data-placement="top"
                                        title="Если полоска достигнет 100% квантум будет закрыт" role="progressbar"
                                        style="width:{{ $maths_k->id }}%">
                                        {{ $maths_k->id }}</div>
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
                    data-target="#calendarModalCenterMaths">Расписание</button>
            </div>
        </div>
    </div>
</div>