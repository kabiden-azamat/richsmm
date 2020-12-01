<!doctype html>
<html lang="ru">
<head>
    @include('index.layout.head')
</head>
<body>
<div class="wrapper">
    @include('index.layout.header')
    <main>
        @yield('content')
    </main>
</div>
@include('index.layout.scripts')
</body>
</html>
