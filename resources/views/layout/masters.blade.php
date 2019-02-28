<!DOCTYPE html>

<head>
   <title>Schoters</title>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="{{asset('css/main.css')}}" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="{{asset('js/script.js')}}"></script>
   
</head>



<body>
    @include('layout.navbar')

    @yield('content')
</body>