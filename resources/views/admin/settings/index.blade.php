@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Модули сайта
                        @can('manage-settings')
{{--                            <a href="{{ route('admin.settings.edit') }}"><button type="buttor"--}}
{{--                                                                                     class="btn btn-primary float-right">Обновить</button>--}}
                            </a>
                        @endcan
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                            <th>Модуль</th>
                            <th>Статус</th>
                            <th>Доступ</th>
                            </tr>
                            @foreach ($settings as $key => $setting)
                                <tr>
                                    <td>{{ $setting->module_name }}</td>
                                    <td>
                                        @if($setting->status == '1')
                                            Да
                                        @elseif($setting->status == '0')
                                            Нет
                                            @endif
                                    </td>
                                    <td>
                                        @if($setting->access == 'admin')
                                            Админ
                                        @elseif($setting->access == ' ')
                                            Нет
                                            @endif
                                    </td>
                                </tr>
                            @endforeach
                            </thead>
                        </table>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">{{ trans('event.send') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
