<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/boobstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/templatemo-sixteen.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/templatemo-hexashop.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">

    
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>

</head>
<body>
    @include('layouts.inc.frontnavbar')
    <div class="content">
        @yield('content')
    </div>

    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/jquery.min.js') }}" defer></script>
    


    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{asset('frontend/js/owl.js')}}"></script>
    <script src="{{asset('frontend/js/slick.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.js')}}"></script>
    <script src="{{asset('frontend/js/accordions.js')}}"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
    @if(session('status'))
    <script>
        swal("{{session('status')}}")
    </script>
    @endif

    @yield('scripts')
    @include('layouts.inc.footer')
</body>
</html>
