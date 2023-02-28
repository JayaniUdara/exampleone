@extends('main')
@section('content')
<html>
    <head></head>
    <body>
        <div class="main">
            <div class="navbar">
                <a href="{{url('success')}}">{{Auth::user()->name}}</a> 
                <a href="{{route('products.index')}}">Products</a> 
                <a href="{{route('employees.index')}}">Employees</a> 
                <a href="{{url('logout')}}">Logout</a>
            </div>
            <div class="det">
                <label>Product Details</labels><br/><br/>
            </div>
            <div class="det">
                <label>Name:{{$product->name}}</labels>
            </div>
            <div class="det">
                <label>Detail:{{$product->detail}}</labels>
            </div>
            <div class="det">
                <label>Price:{{$product->price}}</labels>
            </div>
        </div>
    </body>
</html>
@endsection