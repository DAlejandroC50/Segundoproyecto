<!DOCTYPE html>
<html lang="en"> <!--Esta es la plantilla a la que se aplica las etiquetas de contacto.blade-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial scale=1.0">
    <meta http-equiv="X UA-Compatible" content="ie edge">
    <!--En la siguiente línea sino le paso un valor por defecto va a tener el valor de Laravel 12-->
    <title>@yield('title','Laravel 12')</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('css')
</head>
<body>
    <header></header>
    <!--Aquí se carga la sección content que está en contacto.blade-->
    @yield('content')
    <div class="mt-5 p-4 bg-dark text-white text-center">
      <p>Footer</p>
    </div>
</body>
</html>