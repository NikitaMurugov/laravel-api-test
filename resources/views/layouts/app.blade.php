<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

</head>
<body>
<header>
    <div class="content menu">
        <div class="menu-block">
            <div class="menu-logo"></div>
            <div class="menu-logo-name">Проект</div>
        </div>
        <div class="menu-block">
            <div class="menu-item">Единица</div>
            <div class="menu-item">Единица</div>
            <div class="menu-item">Единица</div>
            <div class="menu-item">Единица</div>
        </div>
    </div>
</header>
<main>
    @yield('content');
</main>
<footer>
    <div class="content">
        текущее время: {{ date('d/m/Y H:i:s ', time()) }}
    </div>
</footer>
</body>
</html>
