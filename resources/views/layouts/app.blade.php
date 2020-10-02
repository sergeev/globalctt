<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{!!  asset('js/tinymce.min.js') !!}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Вход в систему') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Добро пожаловать ') }} {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                @can('manage-kvantums')
                                @if ($student_checked_bad->id > 0)
                                    <a class="text-success" href="{{ route('students.students.index') }}">{{ __('Новых заявок ') }} {{ $student_checked_bad->id }}</a>
                                    
                                @else
                                    <a class="text-info" href="{{ route('students.students.index') }}">{{ __('Нет новых заявок') }}</a>
                                @endif
                                @endcan

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @can('manage-users')
                                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                            {{ __('Упр. пользователями') }}
                                        </a>
                                    @endcan

                                    @can('manage-kvantums')
                                        <a class="dropdown-item" href="{{ route('admin.kvantums.index') }}">
                                            {{ __('Упр. квантумами') }}
                                        </a>
                                    @endcan

                                    @can('manage-teachers')
                                        <a class="dropdown-item" href="{{ route('admin.teachers.index') }}">
                                            {{ __('Упр. педагогами') }}
                                        </a>
                                    @endcan

                                    @can('manage-students')
                                        <a class="dropdown-item" href="{{ route('students.students.index') }}">
                                            {{ __('Упр. студентами') }}
                                        </a>
                                    @endcan

                                    @can('manage-timetables')
                                        <a class="dropdown-item" href="{{ route('admin.timetables.index') }}">
                                            {{ __('Упр. расписанием') }}
                                        </a>
                                    @endcan

                                    @can('manage-events')
                                        <a class="dropdown-item" href="{{ route('events.events.index') }}">
                                            {{ __('Упр. событиями') }}
                                        </a>
                                    @endcan

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @include('partials.alerts')
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
