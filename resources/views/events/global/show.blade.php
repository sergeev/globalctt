<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Кванториум 42 - {{ $event->title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

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
{{--                <div class="card-header">--}}
{{--                    <h3>{{ $event->title }}</h3>--}}
{{--                </div>--}}
                <div class="card-body">
                    <img class="card-img-top" src="{{ $event->link_images_1 }}" alt="" class="img-fluid">
                    <br>
                    <br>
                    <h3>{{ $event->title }}</h3>

                    {{ trans('event.author') }} : {{ $event->author }}
                    {{ trans('event.created_at') }} {{ $event->created_at }}
                    {{ __('Количество просмотров: ') }} {{$event->view_count }}

                    <hr />
                    {!! $event->content !!}
                </div>


                <div class="card-header">
{{--                    {{ trans('event.created_at') }} {{ $event->created_at }}--}}
{{--                    {{ trans('event.author') }}--}}
{{--                    {{ $event->author }}--}}
{{--                    {{ __('Количество просмотров: ') }} {{$event->view_count }}--}}

{{--                    @include('events.global.commentsDisplay', ['comments' => $event->comments, 'event_id' => $event->id])--}}

{{--                    <h4>Add comment</h4>--}}
{{--                    <form method="post" action="{{ route('comments.store'   ) }}">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <textarea class="form-control" name="body"></textarea>--}}
{{--                            <input type="hidden" name="event_id" value="{{ $event->id }}" />--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="submit" class="btn btn-success" value="Add Comment" />--}}
{{--                        </div>--}}
{{--                    </form>--}}
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('events.index') }}"> Назад</a>
                    </div>
                </div>
                <script type="text/javascript">
                    VK.init({apiId: 7803948, onlyWidgets: true});
                </script>

                <!-- Put this div tag to the place, where the Comments block will be -->
                <div id="vk_comments"></div>
                <script type="text/javascript">
                    VK.Widgets.Comments("vk_comments", {limit: 10, attach: false, norealtime: 0, limit: 20, autoPublish: 0 });
                </script>
            </div>
        </div>
    </div>
</div>

@extends('kvant42.footer')
<br>
<br>

