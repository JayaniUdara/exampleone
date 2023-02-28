@extends('main')
@section('content')
<html>
    <head></head>
    <body>
        <div class="main">
            
            <div class="navbar">
                <a href="{{route('customers.index')}}">{{Auth::user()->name}}</a> 
                <a href="{{url('place')}}">Place Orders</a>  
                <a href="{{url('orders')}}">My Orders</a>
                <a href="{{url('logout')}}">Logout</a><br><br><br><br><br><br><br>
            </div>
            <div class="admin">
                <center><h1><label>Welcome to Customer Dashboard!</label></h1></center>
            </div>
        </div>
    </body>
</html>
@endsection