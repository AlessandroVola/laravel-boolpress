<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- js --}}
    <script src="{{ asset('js/front.js')  }}" defer></script>

    {{-- CSRF TOKEN --}}
    <meta name="csrf_token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Front Office' ) }}</title>

</head>
<body>
    <div id="root"></div>

  
    
</body>
</html> 