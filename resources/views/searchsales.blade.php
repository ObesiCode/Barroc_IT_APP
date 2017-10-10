@extends('layouts.layoutbasictop')

@section('content')

        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown btn-link" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                </ul>

        </div>

        <!--website start hier hierboven header laravel !-->







        <ul class="list-group">
<p>adress</p>
@foreach($adress as $adr)

    <li class="list-group-item">{{$adr->adress}}</li>

    @endforeach

</ul>

<ul class="list-group">
<p>customername</p>
    @foreach($user as $usr)
    <li class="list-group-item">{{$usr->customer_name}} </li>
    @endforeach
</ul>
 <ul class="list-group">
<p>city</p>
     @foreach($city as $cty)
        <li class="list-group-item">{{$cty->city}}</li>
     @endforeach
</ul>
<ul class="list-group">
    <p>email</p>
    @foreach($email as $ml)
        <li class="list-group-item">{{$ml->email}}</li>

    @endforeach
</ul>
    </div>









@endsection
@extends('layouts.layoutbasicbottom')