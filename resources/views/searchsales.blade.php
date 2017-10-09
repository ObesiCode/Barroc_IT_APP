@extends('layouts.layoutbasictop')

@section('content')
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









@endsection
@extends('layouts.layoutbasicbottom')