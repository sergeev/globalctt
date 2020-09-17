@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Педагог {{ $teacher->teacher_full_name }}
                    <a class="btn btn-primary float-right" href="{{ route('admin.teachers.index') }}"> Назад</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ID:</strong>
                                {{ $teacher->id }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Имя:</strong>
                                {{ $teacher->teacher_full_name }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Квантум:</strong>
                                {{ $teacher->teacher_kvantum }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Примечание:</strong>
                                {{ $teacher->teacher_desc }}
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
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Сертификат</th>
                                <th scope="col">Ф.И.О</th>
                                <th scope="col">Группа</th>
                                <th scope="col">Действия</th>
                            </tr>
                        </thead>
                        @foreach ($students as $student)
                        @if($student->teacherName == $teacher->teacher_full_name)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->inputsCertificate }}</td>
                            <td>{{ $student->name_1_ot }} {{ $student->surname_1_fam }}</td>
                            <td>{{ $student->groupTime }}</td>
                            <td>
                                @can('edit-users')
                                <a href="{{ route('students.students.edit', $student->id) }}"><button type = "buttor" class= "btn btn-primary float-left">Ред.</button></a>
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