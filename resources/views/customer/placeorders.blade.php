@extends('main')
@section('content')
<html>
    <head> </head>
    <body>
        <div class="main">

            <div class="navbar">
                <a href="{{route('customers.index')}}">{{Auth::user()->name}}</a> 
                <a href="{{url('place')}}">Place Orders</a>
                <a href="{{url('orders')}}">My Orders</a>  
                <a href="{{url('logout')}}">Logout</a>
            </div>
            <div class="table">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                    @php
                    $i=0;
                    @endphp
                    @foreach($products as $product)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->detail}}</td>
                        <td>{{$product->price}}</td>
                        <td><a href="{{url('view',$product->id)}}" class="btn btn-warning">Place order</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
@endsection