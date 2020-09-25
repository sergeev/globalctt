@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Квантум @if($kvantum->kvantum_status == '1')<p class="text-success">{{ $kvantum->kvantum_name }}</p>@elseif($kvantum->kvantum_status == '0')<p class="text-danger">{{ $kvantum->kvantum_name }}</p>@endif
                <a class="btn btn-primary float-right" href="{{ route('admin.kvantums.index') }}"> Назад</a>
            </div>
            <div class="card-body">
                @include('admin.errorsForm')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID:</strong>
                    {{ $kvantum->kvantum_id }}
                </div>
            </div>

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
</div>
@endsection
