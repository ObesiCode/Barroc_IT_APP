@extends('layouts.layoutbasictop')

@section('content')

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
    @if ($errors->any())
        <div class="col-sm-12">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-sm-4" id="testing">
        <div class="panel panel-default" id="salespanel">
            <div class="panel-heading">
                <form action="/development">
                    <input type="submit" class="btn-primary" value="Go Back" />
                </form>
                <h1>Development Update</h1>
                <h4>{{$project->projectname}}</h4>
            </div>
            <div class="panel-body" id="">
                <form action="/dev/pru" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="customerid" value="{{$project->Customer_ID}}">

                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="projectname" id="labeltext">Project name</label>
                            <input type="text" class="projectname" id="salesinput" name="projectname"  value="{{$project->projectname}}">
                        </div>
                        <div class="form-group">
                            <label for="projectid" id="labeltext">Project-ID</label>
                            <input readonly type="text" class="projectid" id="salesinput" name="projectid" value={{$project->Project_ID}}>
                        </div>
                        <div class="form-group">
                            <label for="email" id="labeltext">Email</label>
                            <input type="email" class="email" id="salesinput" name="email" value={{$project->email}}>
                        </div>
                        <div class="form-group">
                            <label for="invoices" id="labeltext">invoices</label>
                            @if (!$invoice->isEmpty())
                                    @foreach($invoice as $item)

                                        @if($item->ispayed == 0)
                                        <div class="form-group">
                                            <label for="invoices">not payed</label>
                                            <input  readonly name="invoices"  type="number"  class="alert-danger" id="salesinput"  value="{{$item->invoice_ID}}">
                                        </div>
                                            @else
                                        <div class="form-group">
                                            <label for="invoices">payed</label>
                                            <input readonly name="invoices"  type="number"  class="alert-success" id="salesinput"  value="{{$item->invoice_ID}}">
                                        </div>
                                            @endif


                                        @endforeach
                            @else
                                <input type="text" name="invoices" class="invoices" id="salesinput" value="there are no invoices for this project">


                            @endif


                        </div>
                        <div class="form-group">
                            <label for="status" id="labeltext">
                                @if ($project->status == 0)
                                    Currently: Not started
                                    @elseif($project->status == 1)
                                    Currently: In Development
                                    @elseif($project->status == 2)
                                    Currently: Finished
                                    @endif

                            </label>
                            <select name="status" id="status">
                                <option value="0">Not started</option>
                                <option value="1">In Development</option>
                                <option value="2">Finished</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="application" id="labeltext">Application</label>
                            <input type="text" class="application" id="salesinput" name="application" value="{{$project->application}}">
                        </div>
                        <div class="form-group">
                            <label for="hardware" id="labeltext">Hardware</label>
                            <input type="text" class="hardware" id="salesinput" name="hardware" value="{{$project->hardware}}">
                        </div>
                        <div class="form-group">
                            <label for="opsystem" id="labeltext">Operating system</label>
                            <input type="text" class="opsystem" id="salesinput" name="operatingsystem" value="{{$project->operatingsystem}}">
                        </div>
                        <div class="form-group">
                            <label for="contactperson" id="labeltext">Contact person</label>
                            <input type="text" class="contactperson" id="salesinput" name="contactperson" value="{{$project->contactperson}}">
                        </div>
                        <div class="form-group">
                            <label for="lastcontact" id="labeltext">Last contact</label>
                            <input type="text" class="lastcontact" id="salesinput" name="last_contact" value="{{$project->last_contact}}">
                        </div>
                        <div class="form-group">
                            <label for="nextcontact" id="labeltext">Next contact</label>
                            <input type="text" class="nextcontact" id="salesinput" name="next_contact" value="{{$project->next_contact}}">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="number" id="submitbuttonsales">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <form action="\log" method="post">
                {{csrf_field()}}

                <textarea rows="4" cols="50" class="log" id="log" name="log" >{{$log->log}}</textarea>
                <input type="submit" class="btn-primary" id="button" value="Send">
            </form>
        </div>
    </div>
    <div class="col-sm-4" id="testing" >
        <div class="tableview" id="scrollablediv">
            <table class="table table-bordered" id="tableclass">
                <thead>
                <tr>
                    <form action="/search/development" method="post">
                        {{csrf_field()}}
                        <th id="customth"><label for="search" id="labeltext">Search</label>
                            <input type="text" id="basicblack" name="search" >
                            <input type="submit" id="submitbuttonsales" value="Send">
                    </form>
                    </th>

                </tr>

                <tr>
                    <th id="tabletoptext">Project-id</th>
                    <th id="tabletoptext">Status</th>
                    <th id="tabletoptext">Project name</th>
                    <th id="tabletoptext"><p>EDIT</p></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)

                        @if($project->is_active == 1)

                         @if($project->status == 0)
                              <tr class="alert-info">
                                   <td><p id="basicblack">{{$project->Project_ID}}</p></td>
                                   <td><p id="basicblack">Not Started</p></td>
                                  <td><p id="basicblack">{{$project->projectname}}</p></td>
                                 <td>
                                     <form action="/development/{{$project->Project_ID}}">
                                          <input type="submit" class="btn-primary" value="edit" />
                                       </form>
                                   </td>
                               </tr>
                           @elseif($project->status == 1)
                              <tr class="alert-warning">
                                 <td><p id="basicblack">{{$project->Project_ID}}</p></td>
                                 <td><p id="basicblack">In development</p></td>
                                    <td><p id="basicblack">{{$project->projectname}}</p></td>
                                    <td>
                                        <form action="/development/{{$project->Project_ID}}}">
                                            <input type="submit" class="btn-primary" value="edit" />
                                        </form>
                                    </td>
                            </tr>

                             @elseif($project->status == 2)
                                <tr class="alert-success">
                                   <td><p id="basicblack">{{$project->Project_ID}}</p></td>
                                   <td><p id="basicblack">Finished</p></td>
                                   <td><p id="basicblack">{{$project->projectname}}</p></td>
                                  <td>
                                      <form action="/development/{{$project->Project_ID}}">
                                         <input type="submit" class="btn-primary" value="edit" />
                                        </form>
                                 </td>
                              </tr>

                          @endif
                         @else

                         @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
@extends('layouts.layoutbasicbottom')