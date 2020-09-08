@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Квантум {{ $kvantum->kvantum_name }} </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.kvantums.index') }}"> Назад</a>
            </div>
        </div>
    </div>
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

<p class="text-center text-primary"><small>+</small></p>
@endsection
