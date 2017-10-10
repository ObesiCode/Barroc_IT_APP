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

        <!--website start hier hierboven header laravel !-->







        <ul class="list-group">
            <h2>results based on customer adresses</h2>
            <table class="table table-bordered" id="tableclass">
                <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>adress</th>
                    <th>customername</th>
                    <th>city</th>
                    <th>number</th>
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
                       <td>
                           <form action="/sales/{{$adr->Customer_ID}}">
                               <input type="submit" class="btn-primary" value="edit" />
                           </form>
                       </td>
                   </tr>


    @endforeach
                </tbody>
            </table>
</ul>

<ul class="list-group">
<h2>results based on customer names</h2>
    <table class="table table-bordered" id="tableclass">
        <thead>
        <tr>
            <th>Customer ID</th>
            <th>adress</th>
            <th>customername</th>
            <th>city</th>
            <th>number</th>
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
            <td><form action="/sales/{{$usr->Customer_ID}}">
                    <input type="submit" class="btn-primary" value="edit" />
                </form></td>
        </tr>



    @endforeach
    </tbody>
        </table>
</ul>
 <ul class="list-group">
     <h2>results based on customer cities</h2>
     <table class="table table-bordered" id="tableclass">
     <thead>
     <tr>
         <th>Customer ID</th>
         <th>adress</th>
         <th>customername</th>
         <th>city</th>
         <th>number</th>
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
             <td><form action="/sales/{{$cty->Customer_ID}}">
                     <input type="submit" class="btn-primary" value="edit" />
                 </form></td>
         </tr>
     @endforeach
     </tbody>
     </table>
</ul>
<ul class="list-group">
    <h2>results based on customer emails</h2>
    <table class="table table-bordered" id="tableclass">
    <thead>
    <tr>
        <th>Customer ID</th>
        <th>adress</th>
        <th>customername</th>
        <th>city</th>
        <th>number</th>
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
            <td><form action="/sales/{{$ml->Customer_ID}}">
                    <input type="submit" class="btn-primary" value="edit" />
                </form></td>
        </tr>

    @endforeach
    </tbody>
        </table>
</ul>
    </div>









@endsection
@extends('layouts.layoutbasicbottom')