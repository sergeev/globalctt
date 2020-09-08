@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Педагог {{ $teacher->teacher_full_name }} </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.teachers.index') }}"> Назад</a>
        </div>
    </div>
</div>

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
@endsection
