<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $title_page; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/__favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <script type="text/javascript">
    var _userway_config = {
      /* uncomment the following line to override default position*/
      /* position: '1', */
      /* uncomment the following line to override default size (values: small, large)*/
      /* size: 'small', */
      /* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
      /* language: 'ru', */
      /* uncomment the following line to override color set via widget (e.g., #053f67)*/
      /* color: '#385E9D', */
      /* uncomment the following line to override type set via widget (1=person, 2=chair, 3=eye, 4=text)*/
      /* type: '4', */
      /* uncomment the following lines to override the accessibility statement*/
      /* statement_text: "Our Accessibility Statement", */
      /* statement_url: "http://www.example.com/accessibility", */
      /* uncomment the following line to override support on mobile devices*/
      /* mobile: true, */
      account: 'G4bls11Hfp'
    };
  </script>
  <script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>

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