<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Development</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/developmentpage.css') }}">
    </head>
    <body>
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




        <div class="col-sm-4" id="testing">
                <div class="panel panel-default" id="salespanel">
                    <div class="panel-heading">
                        <h1>Development</h1>
                    </div>
                    <div class="panel-body" id="">
                        <form action="" method="post">

                            {{csrf_field()}}
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="projectname" id="labeltext">Project name</label>
                                    <input type="text" class="projectname" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="projectid" id="labeltext">Project-ID</label>
                                    <input readonly type="text" class="projectid" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="customername" id="labeltext">Customer name</label>
                                    <input type="text" class="customername" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="email" id="labeltext">Email</label>
                                    <input type="email" class="email" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="phonenumber" id="labeltext">Phone number</label>
                                    <input type="text" class="phonenumber" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="offertenumber" id="labeltext">Offerte number</label>
                                    <input readonly type="number" class="offertenumber" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="log" id="labeltext">Log</label>
                                    <input type="text" class="log" id="salesinput">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label for="application" id="labeltext">Application</label>
                                    <input type="text" class="application" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="hardware" id="labeltext">Hardware</label>
                                    <input type="text" class="hardware" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="opsystem" id="labeltext">Operating system</label>
                                    <input type="text" class="opsystem" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="contactperson" id="labeltext">Contact person</label>
                                    <input type="text" class="contactperson" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="lastcontact" id="labeltext">Last contact</label>
                                    <input type="text" class="lastcontact" id="salesinput">
                                </div>
                                <div class="form-group">
                                    <label for="nextcontact" id="labeltext">Next contact</label>
                                    <input type="text" class="nextcontact" id="salesinput">
                                </div>
                                <div class="form-group">
                                <input type="submit" class="number" id="submitbuttonsales">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" id="testing"></div>
                <div class="col-sm-4" id="testing">
                    <form action="">
                        {{csrf_field()}}
                        <table class="table table-bordered" id="tableclass">
                            <thead>
                            <tr >
                                <th id="customth"><label for="search" id="labeltext">Search</label> <input type="text" id="search" name="search" >

                                </th>
                                <th><input type="submit" id="submitbuttonsales"></th>
                            </tr>
                            <tr>
                                <th id="tabletoptext">invoice-id</th>
                                <th id="tabletoptext">Customer-id</th>
                                <th id="tabletoptext">name</th>
                                <th id="tabletoptext"><p>EDIT</p></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="text" name="invoicid" id="inputtext"></td>
                                <td><input type="text" name="customerid" id="inputtext"></td>
                                <td><input type="text" name="name" id="inputtext"></td>
                                <td><a href="#">EDIT</a></td>
                            </tr>



                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>