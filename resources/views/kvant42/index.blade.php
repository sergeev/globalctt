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

<body>

@include('kvant42.header')

@include('kvant42.intro')

<main id="main">

@include('kvant42.about')

@include('kvant42.services')

@include('kvant42.why_us')

@include('events.global.index')

@include('kvant42.portfolio')

{{-- @include('kvant42.clients') --}}

@include('kvant42.team')

@include('kvant42.contact')

</main>

@include('kvant42.footer')

@include('kvant42.preloader')