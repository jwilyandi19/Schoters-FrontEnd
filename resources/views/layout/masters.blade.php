<!DOCTYPE html>

<head>
   <title>Schoters</title>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/main.css')}}" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
</head>



<body>
    @include('layout.navbar')

    
    <div>ABCDEFGHIJKLMNOPQRSTUVWXYZ</div>

    @yield('content')
</body>