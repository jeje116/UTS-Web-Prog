@extends('layout')

@section('transactionContent')
    <div class="transaction_history">
        <ul class="history_lists">
            {{-- @dd($drinks->Where('id', 2)) --}}
            @foreach ($transactions as $transaction)
                @php
                    $drink = $drinks->Where('id', $transaction->drink_id);
                    $drink_type_id;
                    $drink_name;
                    $drink_image_link;
                    $drink_price;
                    foreach ($drink as $drin) {
                        $drink_name = $drin->name;
                        $drink_type_id = $drin->drink_type_id;
                        $drink_image_link = $drin->image_link;
                        $drink_price = $drin->price;
                    }
                    
                    $drink_type = $drink_types->where('id', $drink_type_id);
                    $drink_type_name;
                    foreach ($drink_type as $drin_type) {
                        $drink_type_name = $drin_type->name;
                    }
                    
                @endphp
                
            <li class="list">
                <div class="list_upper_section">
                    <p class="list_drink_type">{{$drink_type_name}}</p>
                    <p class="list_purchased_date">{{$transaction->purchase_date}}</p>
                </div>
                <div class="list_mid_section">
                    <div class="list_image">
                        <img src="{{$drink_image_link}}" alt="">
                    </div>
                    <div class="list_description">
                        <p class="list_drink_name">{{$drink_name}}</p>
                    </div>
                </div>
                <div class="list_lower_section">
                    <p class="list_price">Rp{{number_format($drink_price, 0 , '.' , '.' )}}</p>
                    <a href="/shop/{{$drink_type_id}}/prod/{{$transaction->drink_id}}" class="buy_again_button">BUY AGAIN</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
@endsection