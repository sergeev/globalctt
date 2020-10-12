<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>IT-CUBE.Новокузнецк Федеральная сеть детских Центров цифрового образования</title>

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
                @include('itcube42.welcome')
            </body>
    </div>
    <!-- load JS -->
    @include('itcube42.preloader')