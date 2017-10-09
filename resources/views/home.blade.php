@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard testing {{ Auth::user()->name}}</div>
                <ul class="list-group">
                @if(Auth::user()->name == 'admin')

                        <li class="list-group-item"><a href="/admin">ADMIN PAGE</a></li>
                        <li class="list-group-item"><a href="/finance">FINANCE PAGE</a></li>
                        <li class="list-group-item"><a href="/sales">SALES PAGE</a></li>
                        <li class="list-group-item"><a href="/development">DEVELOPMENT PAGE</a></li>

                    @elseif(Auth::user()->name == 'finance')
                        <li class="list-group-item"><a href="/finance">FINANCE PAGE</a></li>
                @elseif(Auth::user()->name == 'sales')
                        <li class="list-group-item"><a href="/sales">SALES PAGE</a></li>
                @elseif(Auth::user()->name == 'development')
                        <li class="list-group-item"><a href="/development">DEVELOPMENT PAGE</a></li>

                @endif


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
