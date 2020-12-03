<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
@yield('meta-tags')
<link rel="icon" href="/admin/images/favicon.ico">

<title>
    @if(isset($title))
        {{ $title }}
    @else
        {{ env('APP_NAME') }}
    @endif
</title>

<!-- Vendors Style-->
<link rel="stylesheet" href="/admin/css/vendors_css.css">

<!-- Style-->
<link rel="stylesheet" href="/admin/css/style.css">
<link rel="stylesheet" href="/admin/css/skin_color.css">
@yield('styles')
