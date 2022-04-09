<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name') }}</title>

</head>
<body >
<div id="app">
    <header>
        <menu-component></menu-component>
    </header>
    <main>
        <router-view></roter-view>
    </main>
    <footer>
        <footer-component></footer-component>
    </footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
