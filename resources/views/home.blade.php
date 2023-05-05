{{-- @php
    $user_name;
    $user_loyalty_level;
    $user_star_balance;

    foreach ($user as $use)
        $user_name = $use->name;
        $user_loyalty_level = $use->loyalty_level;
        $user_star_balance = $use->star_balance;
@endphp --}}

@extends('layout')

@section('homeContent')
<div class="star_section">
    <div class="graph_bar">
        <div class="graph_section">
            <div class="bar"></div>
            <div class="circle"></div>
            <div class="bar"></div>
            <div class="circle"></div>
            <div class="bar clear"></div>
            <div class="circle clear"></div>
            <div class="bar clear"></div>
            <div class="circle clear"></div>
            <div class="bar clear"></div>
        </div>
        <div class="number_section">
            <div class="bar number"></div>
            <div class="circle number">25</div>
            <div class="bar number"></div>
            <div class="circle number">50</div>
            <div class="bar number"></div>
            <div class="circle number">75</div>
            <div class="bar number"></div>
            <div class="circle number">100</div>
            <div class="bar number"></div>
        </div>
    </div>
    <div class="balance">
        <div class="star">
            <p>{{$user_star_balance}}</p>
            <img src="{{ asset('./Images/orange_star.png') }}" alt="star">
        </div>
        <p class="balance_word">Star balance</p>
    </div>

    <div class="button_section">
        <div class="redeem_button">
            <p>Redeem</p>
            <img src="{{ asset('./Images/white_outline_star.ico') }}" alt="star">
        </div>
    </div>
</div>

<div class="news_section">
    <img src="https://mcdonaldsblog.in/wp-content/uploads/2021/03/Get-Refreshed-700x377.jpeg" alt="promosi">
</div>

<div class="promo_section">
    <div class="promo_header">
        Promo Information
    </div>
    <ul class="promos">
        @foreach ($promos as $promo)
            <li class="promo">
                <a href="{{$promo->direct_link}}">
                    <div class="promo_image_section">
                        <img src="{{$promo->image_link}}" alt="">
                    </div>
                    <div class="promo_words_section">
                        <p class="promo_name">{{$promo->name}}</p>
                        <p class="promo_desc">{{$promo->description}}</p>
                    </div>
                </a>
            </li>
        @endforeach
        
    </ul>
</div>

<a class="shop_button" href="/shop/1/prod/0">
    <img src="Images/white_bag_icon.png" alt="bag">
    SHOP
</a>

@endsection
