@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Педагоги
                        @can('manage-teachers')
                            <a href="{{ route('admin.teachers.create') }}">
                                <button type="buttor" class="btn btn-primary float-right">Добавить</button>
                            </a>
                        @endcan
                    </div>
                    <div class="card-body">
                        <table class="table ">
                            <tr>
                                <th>ID</th>
                                <th>Организация</th>
                                <th>Ф.И.О</th>
                                <th>Квантум</th>
                                <th>Детей</th>
                                <th>Примечание</th>
                                <th width="280px">Действие</th>
                            </tr>
                            @foreach ($teachers as $key => $teacher)

                                <tr>
                                    <td>{{ $teacher->id }}</td>
                                    <td>
                                        @if ($teacher->organization_show == '0')
                                            Меридиан
                                        @elseif($teacher->organization_show == '1')
                                            Кванториум
                                        @elseif($teacher->organization_show == '2')
                                            ИТКуб
                                        @else
                                            Нет
                                        @endif
                                    </td>
                                    <td>{{ $teacher->teacher_full_name }}</td>
                                    <td>{{ $teacher->teacher_kvantum }}</td>
                                    <td>
                                        @foreach ( $students as $student)
                                            
                                        @if ($student->teacherName == $teacher->teacher_full_name)
                                           {{ $student_techer_count->id  }}
                                        @else
                                        Нет данных
                                        @endif

                                        @endforeach

                                    </td>

                                    <td>{{ $teacher->teacher_desc }}</td>
                                    <td>
                                        <form action="{{ route('admin.teachers.destroy', $teacher->id) }}" method="POST">
                                            <a class="btn btn-info"
                                                href="{{ route('admin.teachers.show', $teacher->id) }}">Показать</a>
                                            @can('manage-teachers')
                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.teachers.edit', $teacher->id) }}">Ред.</a>
                                            @endcan


                                            @csrf
                                            @method('DELETE')
                                            @can('manage-teachers')
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


    {!! $teachers->render() !!}
@endsection
