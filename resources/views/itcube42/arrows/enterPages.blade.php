<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ $itcube_01 }}</title>

    <!-- Bootstrap CSS CDN -->
    <!-- Our Custom CSS -->
    <!-- Awesome CSS CDN-->
    @include('itcube42.loader')

</head>
<body>

  <div class="wrapper">
      <!-- Sidebar Holder -->
      @include('itcube42.headerLeft')

      <!-- Page Content Holder -->
      <div id="content">
          {{-- Navbar views --}}
          @include('itcube42.headerNavbar')

          <body>
<center>
<h1><p>{{ $itcube_03 }}</p>
<h3><p>{{ $itcube_02 }}</h3></p></center>

<div class="container">
<div class="card-deck">
  <div class="card shadow-lg p-3 mb-5 bg-white rounded">
    <div class="card-body">
      <h5 class="card-title"><center>{{ $itcube_05 }}</center></h5>
      <p class="card-text"><center>{{ $itcube_06 }}</center></p>
    </div>
  </div>
  <div class="card shadow-lg p-3 mb-5 bg-white rounded">
    <div class="card-body">
      <h5 class="card-title"><center>{{ $itcube_07 }}</center></h5>
      <p class="card-text"><center>{{ $itcube_08 }}</center></p>
    </div>
  </div>
  <div class="card shadow-lg p-3 mb-5 bg-white rounded">
    <div class="card-body">
      <h5 class="card-title"><center>{{ $itcube_09 }}</center></h5>
      <p class="card-text"><center>{{ $itcube_10 }}</center></p>
    </div>
  </div>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
    <div class="card-body">
      <h5 class="card-title"><center>{{ $itcube_11 }}</center></h5>
      <p class="card-text"><center>{{ $itcube_12 }}</center></p>
    </div>
  </div>
</div>
<br>
<div class="jumbotron">
  <h1 class="display-4"><center>{{ $itcube_03 }}</center></h1>
  <p class="lead"><center>{{ $itcube_13_01 }}</center></p>
  <hr class="my-4">
<p>{{ $itcube_13_02 }}</p>
</div>

<div class="card shadow-lg p-3 mb-5 bg-white rounded">
  <h5 class="card-header">{{ $itcube_13_03 }}</h5>
  <div class="card-body">
  <h5 class="card-title">{{ $itcube_13_03_01 }}</h5>
    <p class="card-text">{{ $itcube_13_03_02 }}</p>
    <p class="card-text"{{ $itcube_13_03_03 }}</p>
      <p class="card-text">{{ $itcube_13_03_04 }}</p>
    </div>
</div>
<br>
<div class="jumbotron">
  <p class="lead">{{ $itcube_14_01 }}</p>
  <hr class="my-4">
  <p>{{ $itcube_14_01_01 }}</p>
  <p class="card-text">{{ $itcube_14_01_01_01 }}</p>

  <p class="card-text">{{ $itcube_14_01_02 }}</p>
<p class="card-text">{{ $itcube_14_01_03 }}</p>
<p class="card-text">{{ $itcube_14_01_04 }}</p>
</div>
<br>

<div class="card text-center">
  <div class="card-header">
    <h2>{{ $itcube_enter_01 }}</h2>
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $itcube_enter_01_01 }}</h5>
    <a href="#" class="btn btn-primary">Подать заявку</a>
  </div>
</div>
</div>
</div>
  </div>
</body>
<!-- load JS -->
@include('itcube42.footer')
@include('itcube42.preloader')