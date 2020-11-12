<!DOCTYPE html>
<html lang="en">

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
    <title>IT-CUBE.Новокузнецк Федеральная сеть детских Центров цифрового образования - Новости</title>
    <style>

    </style>
</head>

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
        </div>
    </div>
</nav>


<div class="container-fluid gtco-news" id="news">
    <div class="container">
        <div>
            <div class="row">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ $event->title }}</h3>
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="{{ $event->link_images_1 }}" alt="" class="img-fluid">
                            {!! $event->content !!}
                        </div>
                        <div class="card-header">{{ trans('event.created_at') }} {{ $event->created_at }}
                            {{ trans('event.author') }}
                            {{ $event->author }}
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('itcube-events.index') }}"> Назад</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav aria-label="Events navigation">
        <ul class="pagination justify-content-center">
            {{-- {!! $events->render() !!} --}}
        </ul>
    </nav>

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
