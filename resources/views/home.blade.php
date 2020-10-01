@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Панель приборов') }}</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="row">
                    @can('manage-events')
                    <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">{{ __('Создать событие') }}</h5>
                            <p class="card-text">{{ __('Добавте крутое событие!') }}</p>
                            <a href="{{ route('events.events.index') }}" class="btn btn-primary">{{ __('Добавить событие') }}</a>
                        </div>
                    </div>
                </div>
                @endcan
                @can('manage-students')
                <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">{{ __('Добавить студента') }}</h5>
                        <p class="card-text">{{ __('Добавить студента') }}</p>
                        <a href="{{ route('students.students.index') }}" class="btn btn-primary">{{ __('Добавить студента') }}</a>
                    </div>
                </div>   
                </div>
                @endcan

                @can('teacher-students-report')
                <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">{{ __('Создать отчет') }}</h5>
                        <p class="card-text">{{ __('Сформировать и отправить отчет о наполняемости детей') }}</p>
                        <a href="{{ route('teachers_report.index') }}" class="btn btn-primary">{{ __('Создать отчет') }}</a>
                    </div>
                </div>   
                </div>
                @endcan
            </div>
        </div>
    </div>
</div>
</div>
@endsection
