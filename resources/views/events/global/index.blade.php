<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
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

<section id="services" class="section-bg">
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
                                <h5 class="card-title">{!! $event->title !!}</h5>
                                <p class="card-text">{{ Str::limit($event->content, 200) }} </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>