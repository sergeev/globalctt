<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- awesone fonts css-->
    <!-- Favicons -->
    <link href="{{ URL::asset('itcube/images/favicon.ico') }}" rel="icon">
    <link href="{{ URL::asset('itcube/images/favicon.ico') }}" rel="apple-touch-icon">

    <link href="{{ URL::asset('itcube/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('itcube/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('itcube/owl-carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="{{ URL::asset('itcube/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ URL::asset('itcube/css/style.css') }}" rel="stylesheet">
    <title>IT-CUBE.Новокузнецк Федеральная сеть детских Центров цифрового образования</title>
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
        <div class="container">
            <a class="navbar-brand" href="/">IT-CUBE 42 <p>Новокузнецк</p></a>
            <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"><span
                    class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#itcube">IT-Cube</a></li>
                    <li class="nav-item"><a class="nav-link" href="#arrows">Направления</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news">Новости</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Команда</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Контакты</a></li>
                </ul>
                {{-- <form class="form-inline my-2 my-lg-0">
                    @guest
                    <a href="{{ route('login') }}"
                        class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase">Войти</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="btn btn-info my-2 my-sm-0 text-uppercase">Регистрация</a>
                    @endif
                    @else
                    <a class="btn btn-info my-2 my-sm-0 text-uppercase"> {{ __('Добро пожаловать ') }}
                        {{ Auth::user()->name }}</a>
                    @endguest
                </form> --}}
            </div>
        </div>
    </nav>
    <div class="container-fluid gtco-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Федеральная сеть детских Центров <span>цифрового</span> образования</h1>
                    <p> IT-CUBE Инновационная образовательная площадка, где школьники от 8 до 17 лет смогут освоить
                        востребованные языки программирования, научатся писать приложения для мобильных устройств,
                        работать с большими данными, создавать виртуальную реальность.</p>
                    <!-- <a href="#">Узнать больше <i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
                </div>
                <div class="col-md-6">
                    <div class="card"><img class="card-img-top img-fluid" src="itcube/images/banner-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-feature" id="itcube">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="cover">
                        <div class="card">
                            <svg class="back-bg" width="100%" viewBox="0 0 900 700"
                                style="position:absolute; z-index: -1">
                                <defs>
                                    <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                        <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                                        <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />
                                    </linearGradient>
                                </defs>
                                <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                    d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z" />
                            </svg>
                            <!-- *************-->

                            <svg width="100%" viewBox="0 0 700 500">
                                <clipPath id="clip-path">
                                    <path
                                        d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z">
                                    </path>
                                </clipPath>
                                <!-- xlink:href for modern browsers, src for IE8- -->
                                <image clip-path="url(#clip-path)" xlink:href="itcube/images/learn-img.jpg" width="100%"
                                    height="465" class="svg__image"></image>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2>«IT-куб» – инновационная площадка дополнительного образования детей</h2>
                    <p>Целью реализации проекта «IT-куб» является достижение лидирующей позиции Российской Федерации на
                        глобальном рынке информационных технологий. Это становится возможным только за счет подготовки
                        критической массы специалистов, способных обеспечить технологический прорыв. В этой связи
                        партнерами проекта выступают «Яндекс» с программой «Яндекс.Лицей», «Samsung Inc.» с программой
                        «IT-школа Samsung», «Алгоритмика», «Крибрум», «1С», «Lego Education», «Microsoft» и др.
                        Предусмотрена большая вариативность программ для любого из возрастов от 7 лет – каждая отвечает
                        современным запросам ИТ-отрасли.</p>
                    <!-- <a type="button" data-toggle="modal" data-target="#it_cube_info">Узнать больше <i
                            class="fa fa-angle-right" aria-hidden="true"></i></a> -->

                    <!-- IT-куб Modal -->
                    <!-- <div class="modal fade" id="it_cube_info" tabindex="-1" role="dialog"
                        aria-labelledby="it_cube_infoTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <a type="button" data-dismiss="modal">Закрыть <i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-features" id="arrows">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2> Наши направления</h2>
                    <p>Бюджетная <span>(бесплатная)</span> программа обучения юных программистов под руководством
                        сертифицированных педагогов дополнительного образования организована по следующим
                        образовательным направлениям:</p>
                    <!-- <a href="#">Узнать больше <i class="fa fa-angle-right" aria-hidden="true"></i></a> -->
                </div>
                <div class="col-lg-8">
                    <svg id="bg-services" width="100%" viewBox="0 0 1000 800">
                        <defs>
                            <linearGradient id="PSgrad_02" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                                <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />
                            </linearGradient>
                        </defs>
                        <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                            d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z" />
                    </svg>
                    <div class="row">
                        <div class="col">
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="itcube/images/svg/logotip1.svg" alt="">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Мобильная разработка</h3>
                                    <p class="card-text"><img src="itcube/images/sp/samsung-300x99.png"
                                            class="img-fluid" alt=""></p>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="itcube/images/svg/logotip2.svg" alt="">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Системное администрирование</h3>
                                    <p class="card-text"><img src="itcube/images/sp/Cisco-300-300x100.png"
                                            class="img-fluid" alt=""></p>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="itcube/images/svg/logotip3.svg" alt="">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Базовые навыки программирования</h3>
                                    <p class="card-text"><img src="itcube/images/sp/Lego-Education-Logo-300x90.png"
                                            class="img-fluid" alt=""></p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="itcube/images/svg/logotip4.svg" alt="">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Основы программирования на Python</h3>
                                    <p class="card-text"><img src="itcube/images/sp/ya-300x118.png" class="img-fluid"
                                            alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="itcube/images/svg/logotip5.svg" alt="">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Базовые навыки программирования на С-подобных
                                        языках</h3>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="itcube/images/svg/logotip6.svg" alt="">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Основы программирования на Java</h3>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="itcube/images/svg/cube-dir1.png"
                                        alt=""></div>
                                <div class="card-body">
                                    <h3 class="card-title">Разработка виртуальной реальности</h3>
                                    <p class="card-text">Разработка приложений виртуальной и дополненной реальности</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-numbers-block" id="team">
        <div class="container">
            <svg width="100%" viewBox="0 0 1600 400">
                <defs>
                    <linearGradient id="PSgrad_03" x1="80.279%" x2="0%" y2="0%">
                        <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                        <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />

                    </linearGradient>

                </defs>
                <!-- <clipPath id="clip-path3">

                                      </clipPath> -->

                <path fill-rule="evenodd" fill="url(#PSgrad_03)"
                    d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z">
                </path>

                <clipPath id="ctm" fill="none">
                    <path
                        d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z">
                    </path>
                </clipPath>

                <!-- xlink:href for modern browsers, src for IE8- -->
                <image clip-path="url(#ctm)" xlink:href="itcube/images/word-map.png" height="800px" width="100%"
                    class="svg__image">

                </image>

            </svg>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">530</h5>
                            <p class="card-text">Детей</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">12</h5>
                            <p class="card-text">Проектов</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">1,188</h5>
                            <p class="card-text">Учебных часов</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">6</h5>
                            <p class="card-text">Профессионалов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid gtco-testimonials">
        <div class="container">
            <h2>Преподаватели</h2>
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div>
                    <div class="card text-center"><img class="card-img-top" src="itcube/images/customer2.jpg" alt="">
                        <div class="card-body">
                            <h5>Наумов Александр Анатольевич <br />
                                <span>Основы программирования </span>
                            </h5>
                            <p class="card-text"> </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="itcube/images/customer2.jpg" alt="">
                        <div class="card-body">
                            <h5>Давиденко
                                Александр
                                Александрович<br />
                                <span>Программирова
                                    ние на Python </span>
                            </h5>
                            <p class="card-text"> </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="itcube/images/customer2.jpg" alt="">
                        <div class="card-body">
                            <h5>Макашов Виталий
                                Дмитриевич
                                <br />
                                <span>Системное
                                    администриров
                                    ание
                                    (True Admin)</span>
                            </h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="itcube/images/customer2.jpg" alt="">
                        <div class="card-body">
                            <h5>Панов
                                Дмитрий
                                Борисовичn<br />
                                <span>Мобильные
                                    разработки</span>
                            </h5>
                            <p class="card-text">Программиро
                                вание на Java</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="itcube/images/customer3.jpg" alt="">
                        <div class="card-body">
                            <h5>Гурьева Елена
                                Сергеевна
                                <br />
                                <span>VR-AR
                                </span>
                            </h5>
                            <p class="card-text" </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="itcube/images/customer2.jpg" alt="">
                        <div class="card-body">
                            <h5>Шмаков
                                Александр
                                Александрович
                                <br />
                                <span>Системное
                                    администриро
                                    вание
                                </span>
                            </h5>
                            <p class="card-text" </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid gtco-testimonials">
        <div class="container">
            <h2>Преподаватели</h2>
            <div class="owl-carousel owl-carousel1 owl-theme">
                @foreach ($teachers as $teacher)
                    @if ($teacher->organization_show == '2')
                        <div>
                            <div class="card text-center"><img class="card-img-top" src="{{ $teacher->link_images_1 }}"
                                    alt="">
                                <div class="card-body">
                                    <h5>{{ $teacher->teacher_full_name }}<br />
                                        <span>{{ $teacher->teacher_kvantum }}</span>
                                    </h5>
                                    <p class="card-text"> </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-fluid gtco-logo-area">
        <div class="container">
            <div class="row">
                <div class="col"><img src="itcube/images/sp/Cisco-300-300x100.png" class="img-fluid" alt=""></div>
                <div class="col"><img src="itcube/images/sp/Lego-Education-Logo-300x90.png" class="img-fluid" alt="">
                </div>
                <div class="col"><img src="itcube/images/sp/samsung-300x99.png" class="img-fluid" alt=""></div>
                <div class="col"><img src="itcube/images/sp/fond-300x109.png" class="img-fluid" alt=""></div>
                <div class="col"><img src="itcube/images/sp/ya-300x118.png" class="img-fluid" alt=""></div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-news" id="news">
        <div class="container">
            <h2>Последнии новости</h2>
            <div>
                <div class="row">
                    <div class="container">
                        <div class="card-deck">
                            @foreach ($events as $event)
                                @if ($event->organization_show == '2')
                                    @if ($event->published == '1')
                                        <div class="card text-center"><img class="card-img-top"
                                                src="{{ $event->link_images_1 }}" alt="">
                                            <div class="card-body text-left pr-0 pl-0">
                                                <h5>{!! $event->title !!}</h5>
                                                <p class="card-text">{!! Str::limit($event->content, 300) !!}</p>
                                                {{-- <a
                                                    href="{{ route('events.show', $event->id) }}"
                                                    class="submit-button">Подробнее <i class="fa fa-angle-right"
                                                        aria-hidden="true"></i></a> --}}
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($events as $event)
            @if ($event->organization_show == '2')
                <nav aria-label="Events navigation">
                    <ul class="pagination justify-content-center">
                        {!! $events->render() !!}
                    </ul>
                </nav>
            @endif
        @endforeach
    </div>

    <footer class="container-fluid" id="gtco-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" id="contact">
                    <h4> Напишите нам </h4>
                    <input type="text" class="form-control" placeholder="Ваше имя">
                    <input type="email" class="form-control" placeholder="Email адрес">
                    <textarea class="form-control" placeholder="Сообщение"></textarea>
                    <a href="#" class="submit-button">Отправить <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-8">
                            <h4>Мы находимся</h4>
                            <p><i class="ion-ios-location-outline"></i>Наш адрес: ул. Циолковского, 78А</p>
                            <p><i class="ion-ios-email-outline"></i>E-mail: it-cube.nvkz@mail.ru</p>
                            <p><i class="ion-ios-telephone-outline"></i>Телефон:</p>
                            <p>Время работы: Пн. – Сб.: 9.00 – 20.00</p>
                            <ul class="nav flex-column company-nav">

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4717.987550367952!2d87.147487712414!3d53.75399391950948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42d0c0f96c44ee5b%3A0x8af0533b5cba0419!2z0JzQkdCe0KMg0JTQniAi0JPQvtGA0L7QtNGB0LrQvtC5INCU0LLQvtGA0LXRhiDQtNC10YLRgdC60L7Qs9C-ICjRjtC90L7RiNC10YHQutC-0LPQvikg0YLQstC-0YDRh9C10YHRgtCy0LAg0LjQvC4g0J0u0JouINCa0YDRg9C_0YHQutC-0Lki!5e0!3m2!1sru!2sru!4v1604270335548!5m2!1sru!2sru"
                                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0">
                                </iframe>
                            </ul>

                            <h4 class="mt-5">Следите за нами в сетях!</h4>
                            <ul class="nav follow-us-nav">
                                <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fa fa-vk"
                                            aria-hidden="true"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-google"
                                            aria-hidden="true"></i></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-linkedin"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <centr>
                <p>&copy; 2020. IT-Cube 42 г.Новокузнецк <a href="ctt-meridian.ru" target="_blank">Меридиан</a></p>
            </centr>
        </div>
    </footer>
    @include('itcube42.preloader')
</body>

</html>
