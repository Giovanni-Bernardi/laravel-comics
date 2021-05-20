<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- link font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
    <!-- link font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Laravel Comics</title>
    <!-- link vueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- my link js -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <!-- my link css -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div id="app">
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </div>
    
</body>
</html>