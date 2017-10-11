
@extends('layouts.layoutbasictop')

@section('content')
    <style>
        .submit
        {

            vertical-align: bottom;
        }
    </style>
    <div class="main">
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
        </div>

        <!--website start hier hierboven header laravel !-->




        <div class="input">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Customer</h1>
                </div>
                <div class="panel-body">
                    <form action="finance" method="post">
                        <div class="form-group col-xs-4">
                            <!--<label for="invoice_id"> Invoice Id</label>
                            <input type="text" id="invoice_id">
                            -->


                            <label for="Doa"> Date Of Action</label>
                            <input type="text" id="Doa">

                            <label for="Payment">Payment Data</label>
                            <input type="text" id="Payment">

                            <label for="Cus_id">Customer ID</label>
                            <input type="text" id="Cus_id">


                            <label for="Email"> Email</label>
                            <input type="email" id="Email">



                        </div>
                        <div class="form-group col-xs-4 submit">

                            <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
<div class="col-sm-4" id="customertable">
    <form action="">
        <table class="table table-bordered" id="tableclass">
            <thead>
            <tr>
                <th id="tabletoptext">Invoice ID</th>
                <th id="tabletoptext">CustomerID</th>
                <th id="tabletoptext">Name</th>
                <th id="tabletoptext">Edit</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" name="IID" id="inputtext"></td>
                <td><input type="text" name="cusID" id="inputtext"></td>
                <td><input type="text" name="cusName" id="inputtext"></td>
                <td><input type="checkbox" name="Edit" id="inputtext"></td>
            </tr>



            </tbody>
        </table>
        <input type="submit" id="submitbutton" placeholder="Send">
    </form>
</div>
