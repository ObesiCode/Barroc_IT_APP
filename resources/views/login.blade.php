@extends('layouts.layoutbasictop')

@section('content')


    <div class="wrapper">
        <form class="form-signin" method="get" action="">
            {{csrf_field()}}
            <h2 class="formtitle">Please login</h2>
            <input type="text" class="form-control" id="formlogin" name="username" placeholder="E"/>
            <input type="password" class="form-control" id="formlogin" name="password" placeholder="Password" />

            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>



@endsection
@extends('layouts.layoutbasicbottom')
