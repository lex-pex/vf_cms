<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $headers['description'] }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ $headers['image'] }}" />
    <meta property="og:title" content="{{ $headers['title'] }}" />
    <meta property="og:description" content="{{ $headers['description'] }}" />
    <meta property="og:url" content="{{ $headers['url'] }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@vegansfreedom.com" />
    <meta name="twitter:title" content="{{ $headers['title'] }}" />
    <meta name="twitter:description" content="{{ $headers['description'] }}" />
    <meta name="twitter:image" content="{{ $headers['image'] }}" />
    <meta name="yandex-verification" content="e31322b7cefd6aa1" />
    <meta name="msvalidate.01" content="2C526067C2E0CAE00D3DEA4A6FAA06F6" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $headers['pageTitle'] }}</title>
    <link rel="icon" href="/favicon.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/vf.css?v=5') }}" rel="stylesheet" />
    <link href="{{ asset('css/shop.css?v=5') }}" rel="stylesheet" />
</head>
<body>
@include('nav.menu')
<main role="main">
@include('nav.header')
@include('shop.nav.sidebar')
    <div class="container-fluid shop-body"><!-- Main Grid Area Starts -->
        <div class="row justify-content-center p-0">
            <div class="col-lg-1 sidebar-lg-shop-spacer"></div>
            <div class="offset-lg-1 col-lg-8 col-md-9 col-sm-12"><!-- Central Canvas -->
@yield('content')
            </div><!-- Central Canvas Ends -->
            <div class="col-lg-2 col-md-3 col-sm-12"><!-- Popular Area Starts -->
@include('nav.pop')
            </div><!-- Popular Area Ends -->
        </div><!-- Main Row Ends -->
    </div><!-- Main Grid Area Ends -->
</main>
@include('nav.footer')
<div class="add-to-cart-picture" style="display:none">
    ТОВАР <br/>
    ДОБАВЛЕН <br/>
    В КОРЗИНУ <br/>
    <i class="fa fa-shopping-cart" style="font-size:2em"></i>
</div>
@include('shop.jumbo.modal')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/vf.js?v=5') }}"></script>
</body>
</html>


































