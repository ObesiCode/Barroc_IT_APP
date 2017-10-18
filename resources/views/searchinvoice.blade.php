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

            <form action="/finance">
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
                <form action="/finance/search" method="post">
                    {{csrf_field()}}
                    <th id="customth"><label for="search" id="labeltext">Search</label>
                        <input type="text" id="basicblack" name="search" >
                        <input type="submit" id="submitbuttonsales" value="Send">
                </form>
            </div>
            <div class="col-sm-6">

                <h2>results based customer_id</h2>
                <ul class="list-group" id="scrollablediv">
                    <table class="table table-bordered" id="tableclass">
                        <thead>
                        <tr>
                            <th>invoice_id</th>
                            <th>customer_id</th>
                            <th>project_id</th>
                            <th>payement_date</th>
                            <th>email</th>
                            <th>edit</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($users as $user)

                            <tr>
                                <td>{{$user->invoice_ID}}</td>
                                <td>{{$user->Customer_ID}}</td>
                                <td>{{$user->Project_ID}}</td>
                                <td>{{$user->payement_date}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <form action="\finance/invoice-edit/{{$user->invoice_ID}}" method="get">
                                        <input type="submit" class="btn-primary" value="edit" >
                                    </form>
                                </td>
                            </tr>


                        @endforeach
                        </tbody>
                    </table>
                </ul>
            </div>

            <div class="col-sm-6">

                <h2>results based invoice-id</h2>
                <ul class="list-group" id="scrollablediv">
                    <table class="table table-bordered" id="tableclass">
                        <thead>
                        <tr>
                            <th>invoice_id</th>
                            <th>customer_id</th>
                            <th>project_id</th>
                            <th>payement_date</th>
                            <th>email</th>
                            <th>edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invoices as $user)

                            <tr>
                                <td>{{$user->invoice_ID}}</td>
                                <td>{{$user->Customer_ID}}</td>
                                <td>{{$user->Project_ID}}</td>
                                <td>{{$user->payement_date}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <form action="\finance/invoice-edit/{{$user->invoice_ID}}">
                                        <input type="submit" class="btn-primary" value="edit" />
                                    </form>
                                </td>
                            </tr>


                        @endforeach
                        </tbody>
                    </table>
                </ul>
            </div>
            <div class="col-sm-6">

                <h2>results based project-id</h2>
                <ul class="list-group" id="scrollablediv">
                    <table class="table table-bordered" id="tableclass">
                        <thead>
                        <tr>
                            <th>invoice_id</th>
                            <th>customer_id</th>
                            <th>project_id</th>
                            <th>payement_date</th>
                            <th>email</th>
                            <th>edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projectids as $user)

                            <tr>
                                <td>{{$user->invoice_ID}}</td>
                                <td>{{$user->Customer_ID}}</td>
                                <td>{{$user->Project_ID}}</td>
                                <td>{{$user->payement_date}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <form action="\finance/invoice-edit/{{$user->invoice_ID}}">
                                        <input type="submit" class="btn-primary" value="edit" />
                                    </form>
                                </td>
                            </tr>


                        @endforeach
                        </tbody>
                    </table>
                </ul>
            </div>

            <div class="col-sm-6">

                <h2>results based customername</h2>
                <ul class="list-group" id="scrollablediv">
                    <table class="table table-bordered" id="tableclass">
                        <thead>
                        <tr>
                            <th>invoice_id</th>
                            <th>customer_id</th>
                            <th>project_id</th>
                            <th>payement_date</th>
                            <th>email</th>
                            <th>edit</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($customers as $user)


                            <tr>
                                <td>{{$user->invoice_ID}}</td>
                                <td>{{$user->Customer_ID}}</td>
                                <td>{{$user->Project_ID}}</td>
                                <td>{{$user->payement_date}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <form action="\finance/invoice-edit/{{$user->invoice_ID}}">
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











@endsection
@extends('layouts.layoutbasicbottom')