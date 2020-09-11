<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title_page; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('kvant42.loader')

    <!-- =======================================================
    Name: Kvantorium42 Novokuznetsk
    Author: v.sergeev.m@gmail.com
    Dev love for CTT family
  ======================================================= -->
</head>

@include('kvant42.header')

<br>
<br>
<section id="services" class="section-bg">
    <div class="container">
        <header class="section-header">
            <h3><a href="{{ route('events.index') }}">Все Новости</a></h3>
        </header>
        <div class="row">
            <div class="container">
                <div class="card-deck">
                    @foreach ($events as $event)
                    @if($event->published == '1')
                    <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <img class="img-fluid" src="{{ $event->link_images_1 }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('events.show', $event->id) }}">{!!
                                        $event->title !!}</a></h5>
                                <p class="card-text">{!! Str::limit($event->content, 300) !!} </p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="Events navigation">
        <ul class="pagination justify-content-center">
            {!! $events->render() !!}
        </ul>
    </nav>

</section>

@include('kvant42.footer')