<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <div id="app">
            <h2>Welcome to Laravel and Vue</h2>
            <counter></counter>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
