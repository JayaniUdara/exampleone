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
                <a href="{{url('logout')}}">Logout</a>
            </div>
            <div class="admin">
                <div class="">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Detail</th>
                            <th>Price</th>
                            <th>Delivery Person</th>
                            <th>Status</th>
                        </tr>
                        @php
                        $i=0;
                        @endphp
    
                        @foreach($orders as $order)
                        @if($order->customer_id==Auth::user()->id)
                        <form action="{{url('orderupdate',$order->id)}}" method="post">    
                            
                            @csrf
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$order->pname}}</td>
                                <td>{{$order->detail}}</td>
                                <td>{{$order->price}}</td>
                                <td>{{$order->name}}</td>
                                <td>
                                @if($order->status=="pending")
                                    <button type="submit" class="btn btn-danger" >Cancel order</button>
                                @endif
                                @if($order->status=="Cancelled")
                                    {{$order->status}}
                                @endif
                                @if($order->status=="Delivered")
                                    {{$order->status}}
                                @endif
                                </td>
                            </tr>
                             @endif
                        </form> 
                        @endforeach                              
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection