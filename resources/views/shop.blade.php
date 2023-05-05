@extends('layout')

@section('shopContent')

@php($drink)

<div class="shop">
    <div class="category_nav">
        @foreach ($types as $type)
            <a class="drink_type" href="/shop/{{$type->id}}/prod/0" style="{{$shop_id == $type->id ? 'background-color: black; color: white;':''}}">{{$type->name}}</a>
        @endforeach

    </div>

    <div class="menus_section">
        <ul class="menus">
            
            @foreach ($drinks as $drink)
                <li class="menu" id='{{$drink->id}}'>
                    <a href="/shop/{{$shop_id}}/prod/{{$drink->id}}">
                        <div class="menu_upper_section">
                            <img src="{{$drink->image_link}}" alt="{{$drink->name}}">
                        </div>
                        <div class="menu_lower_section">
                            <p class="menu_name">{{$drink->name}}</p> 
                            <p class="menu_price">Rp{{number_format($drink->price, 0 , '.' , '.' )}}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    @if ($prod_id > 0)
        <style>
            header, footer, .category_nav, .menus_section {
                opacity: 0.6;
            }
        </style>
        @php($drink = $drinks->where('id', $prod_id))
        @foreach ($drink as $drin)
            
        @endforeach

        <div class="popup_section" style="{{$prod_id > 0 ? 'display: block;': 'display: none;'}}">
            <div class="popup_upper_section">
                <a href="/shop/{{$shop_id}}/prod/0">
                    <img class="popup_back" src="{{asset('Images/white_back_sign.png')}}" alt="">
                </a>
                <img class="popup_product_image" src="{{$drin->image_link}}" alt="">
            </div>
            <div class="popup_lower_section">
                <div class="popup_product_name_price">
                    <p class="popup_product_name">{{$drin->name}}</p>
                    <p class="popup_product_price">Rp{{number_format($drin->price, 0 , '.' , '.' )}}</p>
                </div>
                <p class="popup_product_description">{{$drin->description}}</p>
            </div>
            <form method="post" action="{{route('purchase')}}">
                @csrf
                <input type="text" name="user_id" value={{$user_id}}>
                <input type="text" name="prod_id" value={{$drin->id}}>
                <input type="text" name="shop_id" value={{$shop_id}}>
                <input type="submit" value="BUY">
            </form>
        </div>

        <div class="blocker">

        </div>
    @endif 
    
    
</div>

@endsection