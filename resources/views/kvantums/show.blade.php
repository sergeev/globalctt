@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Квантум @if ($kvantum->kvantum_status == '1')
                        <a class="text-success">{{ $kvantum->kvantum_name }}</a>@elseif($kvantum->kvantum_status == '0')
                            <a class="text-danger">{{ $kvantum->kvantum_name }}</a>
                        @endif
                        <a class="btn btn-primary float-right" href="{{ route('admin.kvantums.index') }}"> Назад</a>
                    </div>
                    <div class="card-body">
                        @include('admin.errorsForm')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Название:</strong>
                                    {{ $kvantum->kvantum_name }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Возраст:</strong>
                                    {{ $kvantum->kvantum_age }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Количество часов в программе:</strong>
                                    {{ $kvantum->kvantum_program_hours_count }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Количество человек:</strong>
                                    {{ $kvantum->kvantum_number_of_people_in_the_group }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Описание:</strong>
                                    {{ $kvantum->kvantum_desc }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Описание расширенное:</strong>
                                    {{ $kvantum->kvantum_desc_full_txt }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Ученики квантума {{ $kvantum->kvantum_name }}
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Сертификат</th>
                                    <th scope="col">Ф.И.О</th>
                                    <th scope="col">Педагог</th>
                                    <th scope="col">Группа</th>
                                    <th scope="col">Действия</th>
                                </tr>
                            </thead>
                            @foreach ($students as $student)
                                @if ($student->inputsKvantum == $kvantum->kvantum_name)
                                    <tr>
                                        <th scope="row">{{ $student->id }}</th>
                                        <td>{{ $student->inputsCertificate }}</td>
                                        <td>{{ $student->name_1_ot }} {{ $student->surname_1_fam }}</td>
                                        <td>{{ $student->teacherName }}</td>
                                        <td>{{ $student->groupTime }}</td>
                                        <td>
                                            @can('edit-users')
                                                <a href="{{ route('students.students.edit', $student->id) }}"><button
                                                        type="buttor" class="btn btn-primary float-left">Ред.</button></a>
                                            @endcan
                                        </td>
                                        </td>
                                    </tr>
                                @elseif('Нет учеников')
                                @endif
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
