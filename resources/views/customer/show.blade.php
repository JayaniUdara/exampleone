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
            <form action="{{url('done',$product->id)}}" method="post">
                @csrf
                <div class="pro">
                Product Name:
                    <input type="text" name="pname" value="{{$product->name}}" readonly></input>
                    <input type="hidden" name="product_id" value="{{$product->id}}" readonly></input>
                </div>
                <div class="pro">
                Employee Name:
                    <select id="employee_id" class="input-pro" name="employee_id">
                        @foreach($users as $user)
                            @if($user->role==('1')) 
                                <option value="{{ $user->id }}" >{{ $user->name }}</option>
                            @endif
                        @endforeach
                    </select><br/>  
                </div >
                <div class="pro">
                    Price:
                    <input type="text" name="price" value="{{$product->price}}" readonly></input>
                    <input type="hidden" name="detail" value="{{$product->detail}}" readonly></input>
                    <input type="hidden" name="status" value="pending" readonly></input>
                </div>
                <div class="a">
                <button type="submit" class="btn btn-primary">Order</button>
                </div>
            </form>
        </div>
    </body>
</html>
@endsection