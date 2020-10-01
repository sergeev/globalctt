<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ __('Главная') }}</a>
                    @else
                        <a href="{{ route('login') }}">{{ __('Войти') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div class="container">
      <header class="section-header">
        <h3>Новости</h3>
      </header>
      <div class="row">
        <div class="container">
          <div class="card-deck">
            @foreach ($events as $event)
            <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
              <div class="box">
                <img class="card-img-top" src="{{ $event->link_images_1 }}" alt="">
                <div class="card-body">
                  <h5 class="card-title">{{ $event->title }}</h5>
                  <p class="card-text">{{ $event->content }}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
        </div>
    </body>
</html>
