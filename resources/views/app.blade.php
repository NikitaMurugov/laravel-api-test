<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

</head>
<body >
<div id="app">
    <header>
        <div class="content menu">
            <div class="menu-block">
                <div class="menu-logo"></div>
                <div class="menu-logo-name">Проект</div>
            </div>
            <div class="menu-block">
                <a class="menu-item">Создать пост</a>
                <a class="menu-item">Единица</a>
                <a class="menu-item">Единица</a>
                <a class="menu-item">Единица</a>
                <daiv class="menu-item">Единица</a>
            </div>
        </div>
    </header>
    <main>
        <Home></Home>
    </main>
    <footer>
        <div class="content">
            текущее время: {{ date('d/m/Y H:i:s ', time()) }}
        </div>
    </footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
