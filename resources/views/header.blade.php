<header>

    @php
        $time = now('GMT+7')->toTimeString('minute');
        $hour = explode(':', $time);

        $greet;
        $hou = (int)$hour[0];
        if($hou<12 && $hou>=6)
            $greet = 'Good Morning';
        elseif($hou<17 && $hou>=12)
            $greet = 'Good Afternoon';
        elseif($hou<22 && $hou>=17)
            $greet = 'Good Evening';
        else {
            $greet = 'Good Night';
        }
    @endphp

    <div class="upper_section">
        <div class="greetings">
            <p class="greet">{{$greet}},</p>
            @php
            $words;
                if ($user_gender == 'male') {
                    $words = 'Mr';
                }
                else {
                    $words = 'Ms';
                }
            @endphp
            <p class="name">{{$words}}. {{$user_name}}</p>
        </div>
        <p class="level" style="color: {{$user_loyalty_level}};">{{$user_loyalty_level}} Level</p>
    </div>

    <div class="lower_section">
        <a class="home_nav" style=" {{$temp == 1 ? 'border-bottom: 0.1rem black solid;' : ''}}" href='/'>
            <img src="{{asset('Images/home_icon.png')}}" alt="bag">
            <p>Home</p>
        </a>
        <a class="transaction_nav" style=" {{$temp == 3 ? 'border-bottom: 0.1rem black solid;' : ''}}" href='/transaction{{$user_id}}'>
            <img src="{{asset('Images/transaction_history.png')}}" alt="bag">
            <p>Transaction</p>
        </a>
    </div>
</header>