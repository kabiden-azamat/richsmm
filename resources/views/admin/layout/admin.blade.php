<!DOCTYPE html>
<html lang="ru">
<head>
    @include('admin.layout.head')
</head>
<body class="hold-transition dark-skin sidebar-mini theme-primary">
<div class="wrapper">
    @include('admin.layout.header')
    @include('admin.layout.sidebar')
    @include('admin.layout.content')
    @include('admin.layout.footer')

    @include('admin.layout.modals')
</div>
@include('admin.layout.scripts')
</body>
</html>
