@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    {{-- @foreach ($users as $user) --}}
                    <div class="card-header"><p class= "float-center">Мои отчеты по наполняемости</p>
                        {{-- @endforeach --}}
                        <a class="btn btn-primary float-right" href="{{ route('home') }}"> Назад</a>
                        <a class="btn btn-primary float-left" href="{{ route('teacher.reports.create') }}"> Добавление нового отчета наполняемости </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    {{-- <th scope="col">{{ __('Сертификат') }}</th> --}}
                                    <th scope="col">Квантум</th>
                                    <th scope="col">Педагог</th>
                                    <th scope="col">Количество детей</th>
                                    <th scope="col">Группа</th>
                                    <th scope="col">День недели</th>
                                    <th scope="col">Дата отчета</th>
                                </tr>
                            </thead>
                            @foreach ($teachers as $teacher)
                            
                            
                            <tr>
                                @foreach($report_lists as $report_list)
                                @foreach ($users as $user)
                                @if($user->teacher_id == $teacher->id)
                                {{-- @if($report_list->teacher_full_name === $teacher->teacher_full_name) --}}
                                <th scope="row">{{ $report_list->id }}</th>
                                <td>{{ $report_list->inputsKvantum }}</td>
                                <td>{{ $report_list->teacher_full_name }}</td>
                                <td>{{ $report_list->student_count }} </td>
                                <td>{{ $report_list->week_group_id }}</td>
                                <td>{{ $report_list->week_day_report }}</td>
                                <td>@if($report_list->report_date_input !== $report_list->created_at)
                                    <a class="text-success">{{ $report_list->report_date_input }}</a>
                                    @else
                                    <a class="text-danger">{{ $report_list->report_date_input }}</a>
                                    @endif
                                </td>
                            </td>  
                           
                           @elseif('')
                           <p>Нет отчетов</p>
                           @endif
                        </tr> 
                        @endforeach
                        @endforeach
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Events navigation">
            <ul class="pagination justify-content-center">
                {{-- $students->render() --}}
            </ul>
        </nav>
    </div>
    @endsection
