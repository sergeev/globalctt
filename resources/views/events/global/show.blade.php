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

<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>{{ $event->title }}</h3></div>
                <div class="card-body">
                    {!! $event->content !!}
                </div>
                <div class="card-header">{{ trans('event.created_at') }} {{ $event->created_at }} {{ trans('event.author') }}
                    {{ $event->author }}          
                <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('events.index') }}"> Назад</a>
            </div>
            </div>

        </div>
    </div>
</div>
<br>
<br>
@include('kvant42.footer')