<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Andavar College of Nursing </title>


      <link rel="stylesheet" type="text/css" href="{{ asset("/css/bootstrap.min.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/animate.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/font-awesome.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/flaticon.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/themify-icons.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/slick.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/prettyPhoto.css") }}" media="all/">
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/shortcodes.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/main.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/megamenu.css") }}" media="all"/>
      <link rel="stylesheet" type="text/css" href="{{ asset("/css/responsive.css") }}" media="all"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/default-skin/default-skin.min.css">

      <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe-ui-default.min.js"></script>

      <style>
        .ttm-service-description > h3 {
            background-image: linear-gradient(120deg, #f857a6 10%, #ef3f6e 100%);
            -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
        }

        .banner_slider .slide_img {
    position: absolute;
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
}
.slick-active .slide_img {
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s;
    -webkit-backface-visibility: hidden;
    -webkit-animation: imageAnimation 36s linear 0s;
    -moz-animation: imageAnimation 36s linear 0s;
    -o-animation: imageAnimation 36s linear 0s;
    -ms-animation: imageAnimation 36s linear 0s;
    animation: imageAnimation 36s linear 0s;
}
@keyframes imageAnimation {
  0% { animation-timing-function: ease-in; }
  8% { transform: scale(1.02); animation-timing-function: ease-out; }
  17% { transform: scale(1.04); animation-timing-function: ease-out; }
  22% { transform: scale(1.02); } 25% { -transform: scale(1.1); }
}
      </style>

   </head>
   <body>

    <div class="page">


        <x-navbar-component/>

        @yield('content')

        <x-footer/>

    </div>

    @if(session('success'))
    <script>
        // Display success message in an alert
        alert("{{ session('success') }}");
    </script>
@endif


    <script src="{{ asset("/js/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ asset("/js/jquery-migrate-3.3.2.min.js") }}" defer></script>
    <script src="{{ asset("/js/bootstrap.min.js") }}" defer></script>
    <script src="{{ asset("/js/jquery.easing.js") }}" defer></script>
    <script src="{{ asset("/js/jquery-waypoints.js") }}" defer></script>
    <script src="{{ asset("/js/jquery-validate.js") }}" defer></script>
    <script src="{{ asset("/js/jquery.prettyPhoto.js") }}" defer></script>
    <script src="{{ asset("/js/slick.min.js") }}" defer></script>
    <script src="{{ asset("/js/numinate.min.js") }}" defer></script>
    <script src="{{ asset("/js/imagesloaded.min.js") }}" defer></script>
    <script src="{{ asset("/js/jquery-isotope.js") }}" defer></script>
    <script src="{{ asset("/js/main.js") }}" defer></script>


   </body>
</html>
