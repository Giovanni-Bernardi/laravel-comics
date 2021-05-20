<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
  <!-- LINK CSS -->
  <link rel="stylesheet" href="{{ assets('/css/app.css') }}">
  {{-- favicon --}}
  <link rel="shortcut icon" sizes="114x114" href="{{{ assets('/storage/assets/favicon.ico') }}}">
  {{-- Google Fonts --}}
  <style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap');
</style>
  <!-- Font AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
  <!-- VUE -->
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>

<body>
  @include('components.header')
  @yield('content')
  @include('components.footer')
</body>

</html>