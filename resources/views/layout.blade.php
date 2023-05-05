<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='{{asset('css/header.css')}}'>
        <link rel="stylesheet" href='{{asset('css/main.css')}}'>
        <link rel="stylesheet" href='{{asset('css/footer.css')}}'>
        <link rel="stylesheet" href='{{asset('css/shop.css')}}'>
        <link rel="stylesheet" href='{{asset('css/transaction.css')}}'>
        <link rel="stylesheet" href='{{asset('css/shopProd.css')}}'>
        <title>Mccafe</title>

    </head>
    <body>
        @include('header')

        <div class="main">
            @switch ($temp)
                @case(1)
                    @yield('homeContent', $user_star_balance)
                    @break
                @case(2) 
                    @yield('shopContent')
                    @break
                @case(3) 
                    @yield('transactionContent')
                    @break
            @endswitch
        </div>

        @include('footer')
    </body>
</html>
