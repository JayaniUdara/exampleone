@extends('main')
@section('content')
<html>
    <head></head>
    <body>
        <div class="main">
            <div class="head">
                <label>E-Store</label>
            </div>
            <div class="navbar">
                <a href="{{url('success')}}">{{Auth::user()->name}}</a> 
                <a href="{{route('products.index')}}">Products</a> 
                <a href="{{route('employees.index')}}">Employees</a> 
                <a href="{{url('logout')}}">Logout</a>
            </div>
            <div class="admin">
                <label>Welcome to Admin Dashboard!</label>
            </div>
        </div>
    </body>
</html>
@endsection