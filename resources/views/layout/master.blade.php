<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stories.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_nav.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/assets.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_panel.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_users.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_stories.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_banning.css') }}" >

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_login.css') }}" > --}}
</head>

{{-- May 21 --}}

<body>
    @auth
        @include('includes.navbar')
    @endauth
    
    <div class="container-fluid"> 
        @yield('content')
    </div>


    
    @yield('js')
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</body>


</html>