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
                            <th>Время занятия</th>
                            <th>Группа</th>
                            <th width="280px">Действие</th>
                            </tr>
                            @foreach ($timetables as $key => $timetable)
                            <tr>
                                <td>{{ $timetable->topic }}</td>
                                <td>{{ $timetable->teacher_full_name }}</td>
                                <td>{{ $timetable->kvantum_name }}</td>
                                <td>{{ $timetable->week_day }}</td>
                                <td>{{ $timetable->week_time }}</td>
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