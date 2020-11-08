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
    

    <div class="container-fluid gtco-news" id="news">
        <div class="container">
            <h2>Последнии новости</h2>
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
                                    <a class="btn btn-primary" href="{{ route('events.index') }}"> Назад</a>
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Events navigation">
            <ul class="pagination justify-content-center">
                {!! $events->render() !!}
            </ul>
        </nav>

    </div>
