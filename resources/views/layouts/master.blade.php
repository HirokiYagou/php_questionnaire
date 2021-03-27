<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="{{ mix('js/app.js') }}" defer></script>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <title>@yield('title') PHP Questionnaire</title>
    </head>
    <body>
        <div class="container-sm">
            @yield('content')
        </div>
    </body>
</html>
