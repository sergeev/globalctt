@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Students
                    @can('edit-users')
                    <a href="{{ route('students.students.create') }}"><button type = "buttor" class= "btn btn-primary float-right">Добавить</button></a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{ __('Сертификат') }}</th>
                                <th scope="col">Ф.И.О</th>
                                <th scope="col">Квантум</th>
                                <th scope="col">Педагог</th>
                                <th scope="col">Действия</th>
                            </tr>
                        </thead>
                        @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->inputsCertificate }}</td>
                            <td>{{ $student->name_1_ot }} {{ $student->surname_1_fam }}</td>
                            <td>{{ $student->inputsKvantum }}</td>
                            <td>{{ $student->teacherName }}</td>
                            <td>
                                @can('edit-users')
                                <a href="{{ route('students.students.edit', $student->id) }}"><button type = "buttor" class= "btn btn-primary float-left">Ред.</button></a>
                                @endcan

                                @can('delete-users')
                                <form action="{{ route('students.students.destroy', $student->id) }}" method="POST" class="float-left">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-warning">Удалить</button>
                                </form>
                                @endcan
                            </td>
                        </td>
                    </tr>
                    @endforeach
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