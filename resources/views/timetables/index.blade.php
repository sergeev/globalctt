@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Расписание педагогов
                    @can('manage-timetables')
                    <a href="{{ route('admin.timetables.create') }}"><button type="buttor"
                            class="btn btn-primary float-right">Создать новое расписание
                            педагога</button></a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                            <th>Название урока</th>
                            <th>Ф.И.О</th>
                            <th>Направление:</th>
                            <th>День недели преподавания</th>
{{--                            <th>Время занятия</th>--}}
                            <th>Группа</th>
                            <th width="280px">Действие</th>
                            </tr>
                            @foreach ($timetables as $key => $timetable)
                            <tr>
                                <td>{{ $timetable->topic }}</td>
                                <td>{{ $timetable->teacher_full_name }}</td>
                                <td>{{ $timetable->kvantum_name }}</td>
                                <td>
                                        @if($timetable->week_day_1 == '1')
                                            Пн.
                                        @elseif($timetable->week_day_1 == '0')
                                        @endif
                                        @if($timetable->week_day_2 == '1')
                                            Вт.
                                            @elseif($timetable->week_day_2 == '0')
                                            @endif
                                        @if($timetable->week_day_3 == '1')
                                            Ср.
                                            @elseif($timetable->week_day_3 == '0')

                                            @endif
                                        @if($timetable->week_day_4 == '1')
                                            Чт.
                                            @elseif($timetable->week_day_4 == '0')

                                            @endif
                                        @if($timetable->week_day_5 == '1')
                                            Пт.
                                            @elseif($timetable->week_day_5 == '0')

                                            @endif
                                        @if($timetable->week_day_6 == '1')
                                            Сб.
                                            @elseif($timetable->week_day_6 == '0')

                                            @endif
                                        @if($timetable->week_day_7 == '1')
                                            Вс.
                                            @elseif($timetable->week_day_7 == '0')
                                            @endif
                                </td>
{{--                                <td>{{ $timetable->week_time }}</td>--}}
                                <td>{{ $timetable->week_group_id }}</td>
                                <td>
                                    <form action="{{ route('admin.timetables.destroy', $timetable->id) }}"
                                        method="POST">
                                        <a class="btn btn-info"
                                            href="{{ route('admin.timetables.show',$timetable->id) }}">Показать</a>
                                        @can('manage-timetables')
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.timetables.edit',$timetable->id) }}">Ред.</a>
                                        @endcan
                                        @csrf
                                        @method('DELETE')
                                        @can('manage-timetables')
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
{!! $timetables->render() !!}
@endsection
