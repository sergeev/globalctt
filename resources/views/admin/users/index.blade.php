@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="accordion" id="accordionExample">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                data-target="#userRole" aria-expanded="true" aria-controls="userRole">
                                Users Role status
                            </button>
                        </h2>
                    </div>

                    <div id="userRole" class="collapse" aria-labelledby="headingOne" data-parent="#userRole">
                        <div class="card-body">
                            <p>Admin - Global role for all systems</p>
                            <p>Director - Role for director this organisation</p>
                            <p>Manager - Manager system (moderate)</p>
                            <p>Redactor - Redactor create news blog and slider</p>
                            <p>Teacher - Teacher role for all students and student group system</p>
                            <p>Student - Student user</p>
                            <p>User - User this default start system profile</p>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Email</th>
                                <th scope="col">Роль</th>
                                <th scope="col">Привязан к</th>
                                <th scope="col">Действие</th>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            @foreach($teachers as $teacher)
                            <td>@if($user->teacher_id == $teacher->teacher_full_id)</td>
                                Нет привязки
                                @else
                                {{ $user->teacher_id }}
                                @endif
                            @endforeach
                            <td>
                                @can('edit-users')
                                <a href="{{ route('admin.users.edit', $user->id) }}"><button type="buttor"
                                        class="btn btn-primary float-left">Ред.</button></a>
                                @endcan

                                @can('delete-users')

                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#userModalCenterDelete">Удалить</button>

                                <!-- Modal -->
                                <div class="modal fade" id="userModalCenterDelete" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Подтерждение
                                                    действия
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Вы действительно хотите удалить пользователя {{ $user->name }} ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Закрыть</button>

                                                <form action="{{ route('admin.users.destroy', $user->id) }}"
                                                    method="POST" class="float-left">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-warning">Удалить</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endcan
                            </td>
                            </td>
                        </tr>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection