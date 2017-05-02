<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="noindex,nofollow">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Scripts -->
  <script>
    window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
      ]) !!};
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
  </head>
  <body>
    <div id="app">
      @section('navbar')
      @include('layouts.navbar')
      @show
      @yield('content')
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
      function initAutocomplete() {
       var options = {
        types: ['(cities)'],
        componentRestrictions: {country: "ca"}
      };

      var inputOrigin = document.getElementById('autoOrigin');
      var autoOrigin = new google.maps.places.Autocomplete(inputOrigin, options);
      var inputDestination = document.getElementById('autoDestination');
      var autoDestination = new google.maps.places.Autocomplete(inputDestination, options);
    }

  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNHgtcSe8bnt6Z4zBuZjgovVqsa5F_WN0&libraries=places&callback=initAutocomplete" async defer></script>
  @yield('script-footer')
</body>
</html>
