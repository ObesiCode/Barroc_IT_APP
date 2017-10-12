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

            <form action="/sales">
                <input type="submit" class="btn-primary" value="Go Back" />
            </form>
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
        @if(Auth::user()->name == "admin")
            <div class="header">
                <div class="row">
                    <div class="links">
                        <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/sales" class="" id="linktext">Sales</a></div>
                        <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/finance" class="" id="linktext">Finance</a></div>
                        <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/development" class="" id="linktext">Development</a></div>
                        <div class="col-sm-3 text-center list-group-item" id="linktext"><a href="/admin" class="" id="linktext">Admin</a></div>
                    </div>
                </div>
            </div>
    @endif

    <!--website start hier hierboven header laravel !-->





        <div class="panel panel-default">
            <div class="col-sm-12">
                <form action="/search/admin/customer" method="get">
                    {{csrf_field()}}
                    <th id="customth"><label for="search" id="labeltext">Search</label>
                        <input type="text" id="basicblack" name="search" >
                        <input type="submit" id="submitbuttonsales" value="Send">
                </form>

            </div>
            <div class="col-sm-6">

                <h2>results based on customer adresses</h2>
                <ul class="list-group" id="scrollablediv">
                    <table class="table table-bordered" id="tableclass">
                        <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>adress</th>
                            <th>customername</th>
                            <th>city</th>
                            <th>number</th>
                            <th>balance</th>
                            <th>edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($adress as $adr)

                            <tr>
                                <td>{{$adr->Customer_ID}}</td>
                                <td>{{$adr->adress}}</td>
                                <td>{{$adr->customer_name}}</td>
                                <td>{{$adr->city}}</td>
                                <td>{{$adr->phonenumber}}</td>
                                @if($adr->saldo <= -500)
                                    <td class="danger">  {{$adr->saldo}}</td>
                                @else
                                    <td class="success">  {{$adr->saldo}}</td>
                                @endif
                                <td>
                                    <form action="\admin/cst/{{$adr->Customer_ID}}">
                                        <input type="submit" class="btn-primary" value="edit" />
                                    </form>
                                </td>
                            </tr>


                        @endforeach
                        </tbody>
                    </table>
                </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <h2>results based on customer names</h2>
            <ul class="list-group" id="scrollablediv">

                <table class="table table-bordered" id="tableclass">
                    <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>adress</th>
                        <th>customername</th>
                        <th>city</th>
                        <th>number</th>
                        <th>balance</th>
                        <th>edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $usr)

                        <tr>
                            <td>{{$usr->Customer_ID}}</td>
                            <td>{{$usr->adress}}</td>
                            <td>{{$usr->customer_name}}</td>
                            <td>{{$usr->city}}</td>
                            <td>{{$usr->phonenumber}}</td>

                                @if($usr->saldo <= -500)
                                <td class="danger">  {{$usr->saldo}}</td>
                                    @else
                                  <td class="success">  {{$usr->saldo}}</td>
                                    @endif


                            <td><form action="\admin/cst/{{$usr->Customer_ID}}">
                                    <input type="submit" class="btn-primary" value="edit" />
                                </form></td>
                        </tr>



                    @endforeach
                    </tbody>
                </table>
            </ul>
        </div>
        <div class="col-sm-6">
            <h2>results based on customer-ID</h2>

            <ul class="list-group" id="scrollablediv">
                <table class="table table-bordered" id="tableclass">
                    <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>adress</th>
                        <th>customername</th>
                        <th>city</th>
                        <th>number</th>
                        <th>balance</th>
                        <th>edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($id as $custid)
                        <tr>
                            <td>{{$custid->Customer_ID}}</td>
                            <td>{{$custid->adress}}</td>
                            <td>{{$custid->customer_name}}</td>
                            <td>{{$custid->city}}</td>
                            <td>{{$custid->phonenumber}}</td>

                            @if($custid->saldo <= -500)
                                <td class="danger">  {{$custid->saldo}}</td>
                            @else
                                <td class="success">  {{$custid->saldo}}</td>
                            @endif

                            <td><form action="\admin/cst/{{$custid->Customer_ID}}">
                                    <input type="submit" class="btn-primary" value="edit" />
                                </form></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </ul>
        </div>
        <div class="col-sm-6">
            <h2>results based on customer cities</h2>
            <ul class="list-group" id="scrollablediv">

                <table class="table table-bordered" id="tableclass">
                    <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>adress</th>
                        <th>customername</th>
                        <th>city</th>
                        <th>number</th>
                        <th>balance</th>
                        <th>edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($city as $cty)

                        <tr>
                            <td>{{$cty->Customer_ID}}</td>
                            <td>{{$cty->adress}}</td>
                            <td>{{$cty->customer_name}}</td>
                            <td>{{$cty->city}}</td>
                            <td>{{$cty->phonenumber}}</td>
                            @if($cty->saldo <= -500)
                                <td class="danger">  {{$cty->saldo}}</td>
                            @else
                                <td class="success">  {{$cty->saldo}}</td>
                            @endif

                            <td><form action="\admin/cst/{{$cty->Customer_ID}}">
                                    <input type="submit" class="btn-primary" value="edit" />
                                </form></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </ul>
        </div>
        <div class="col-sm-6">
            <h2>results based on customer emails</h2>
            <ul class="list-group" id="scrollablediv">

                <table class="table table-bordered" id="tableclass">
                    <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>adress</th>
                        <th>customername</th>
                        <th>city</th>
                        <th>number</th>
                        <th>balance</th>
                        <th>edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($email as $ml)
                        <tr>
                            <td>{{$ml->Customer_ID}}</td>
                            <td>{{$ml->adress}}</td>
                            <td>{{$ml->customer_name}}</td>
                            <td>{{$ml->city}}</td>
                            <td>{{$ml->phonenumber}}</td>

                            @if($ml->saldo <= -500)
                                <td class="danger">  {{$ml->saldo}}</td>
                            @else
                                <td class="success">  {{$ml->saldo}}</td>
                            @endif

                            <td><form action="\admin/cst/{{$ml->Customer_ID}}">
                                    <input type="submit" class="btn-primary" value="edit" />
                                </form></td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </ul>

        </div>
        <div class="col-sm-6">
            <h2>results based on banknumber</h2>
            <ul class="list-group" id="scrollablediv">
                <table class="table table-bordered" id="tableclass">
                    <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>adress</th>
                        <th>customername</th>
                        <th>city</th>
                        <th>banknumber</th>
                        <th>balance</th>
                        <th>edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($banknm as $bank)

                        <tr>
                            <td>{{$bank->Customer_ID}}</td>
                            <td>{{$bank->adress}}</td>
                            <td>{{$bank->customer_name}}</td>
                            <td>{{$bank->city}}</td>
                            <td>{{$bank->bankaccountnumber}}</td>

                            @if($bank->saldo <= -500)
                                <td class="danger">  {{$bank->saldo}}</td>
                            @else
                                <td class="success">  {{$bank->saldo}}</td>
                            @endif

                            <td><form action="\admin/cst/{{$bank->Customer_ID}}">
                                    <input type="submit" class="btn-primary" value="edit" />
                                </form></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </ul>
        </div>
    </div>









@endsection
@extends('layouts.layoutbasicbottom')