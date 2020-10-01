@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Квантумы - статистика
                </div>
                <div class="card-body">
                    <h5 class="list-group-item col-lg-5 margin-tb d-flex justify-content-between align-items-center">
                        Всего
                        детей: <span class="badge badge-primary badge-pill">{{ $totals->total }}</span> </h5>
                    <h5 class="list-group-item col-lg-5 margin-tb d-flex justify-content-between align-items-center">
                        Мальчиков:
                        <span class="badge badge-primary badge-pill">{{ $gender_m->id}}</span> Девочек: <span
                            class="badge badge-primary badge-pill">{{$gender_f->id }} <span>
                    </h5>
                    <h5 class="list-group-item col-lg-5 margin-tb d-flex justify-content-between align-items-center">
                        Количество
                        групп: <span class="badge badge-primary badge-pill">0</span> MVP: <span
                            class="badge badge-primary badge-pill">{{ $MVP->id }}</span> Резидентов: <span
                            class="badge badge-primary badge-pill">{{ $resident_evil->id }}</span> </h5>
                    <h5 class="list-group-item col-lg-5 margin-tb d-flex justify-content-between align-items-center">
                        Проверено:
                        <span class="badge badge-primary badge-pill">{{ $student_checked_ok->id }}</span> Не
                        Проверено:<span class="badge badge-primary badge-pill">{{ $student_checked_bad->id }}</span>
                    </h5>
                </div>
                <!--             <div class="pull-right">
                <h5 class="list-group-item col-lg-5 margin-tb d-flex justify-content-between align-items-center">Меридиан: <span class="badge badge-primary badge-pill">{{ $meridian_stat->id }}</span> </h5>

                <h5 class="list-group-item col-lg-5 margin-tb d-flex justify-content-between align-items-center">Кванториум: <span class="badge badge-primary badge-pill">{{ $kvantorium_stat->id }}</span> </h5>

                <h5 class="list-group-item col-lg-5 margin-tb d-flex justify-content-between align-items-center">ИТКуб: <span class="badge badge-primary badge-pill">{{ $itcube_stat->id }}</span> </h5>
            </div> -->
                <br>
            </div>
            
            <br>
            <div class="card">
                <div class="card-header">Kvantums
                    @can('manage-kvantums')
                    <a href="{{ route('admin.kvantums.create') }}"><button type="buttor"
                            class="btn btn-primary float-right">Добавить</button></a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table ">
                        <tr>
                            <th>Id</th>
                            <th>Название</th>
                            <th>Статус</th>
                            <th>Возраст</th>
                            <th>Количество человек</th>
                            <th>Детей</th>
                            <th width="280px">Действие</th>

                        </tr>
                        @foreach ($kvantums as $key => $kvantum)
                        <tr>
                            <td>{{ $kvantum->kvantum_id }}</td>
                            <td>{{ $kvantum->kvantum_name }}</td>
                            <td>@if($kvantum->kvantum_status == '1')
                                <p class="text-success">Открыт</p>
                                @elseif($kvantum->kvantum_status == '0')
                                <p class="text-danger">Закрыт</p>
                                @endif
                            </td>
                            <td>{{ $kvantum->kvantum_age }}</td>
                            <td>{{ $kvantum->kvantum_number_of_people_in_the_group }}</td>

                            <td>@if($kvantum->kvantum_id == '1')
                                {{ $hitechs->id }}
                                @elseif($kvantum->kvantum_id == '2')
                                {{ $promrobo->id }}
                                @elseif($kvantum->kvantum_id == '3')
                                {{ $it_k->id }}
                                @elseif($kvantum->kvantum_id == '4')
                                {{ $energy_k->id }}
                                @elseif($kvantum->kvantum_id == '5')
                                {{ $nano_k->id }}
                                @elseif($kvantum->kvantum_id == '6')
                                {{ $vr_ar_k->id }}
                                @elseif($kvantum->kvantum_id == '7')
                                {{ $chess_k->id }}
                                @elseif($kvantum->kvantum_id == '8')
                                {{ $maths_k->id }}
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.kvantums.destroy', $kvantum->id) }}" method="POST">
                                    <a class="btn btn-info"
                                        href="{{ route('admin.kvantums.show',$kvantum->id) }}">Показать</a>
                                    @can('manage-kvantums')
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.kvantums.edit',$kvantum->id) }}">Ред.</a>
                                    @endcan


                                    @csrf
                                    @method('DELETE')
                                    @can('manage-kvantums-edit')
                                    <button type="submit" class="btn btn-danger">Удал.</button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
<nav aria-label="Events navigation">
    <ul class="pagination justify-content-center">
        {!! $kvantums->render() !!}
    </ul>
</nav>
@endsection