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
        

            <div class="pad">
                <a class="btn btn-success" href="{{route('products.create')}}"> Create New Product</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            
            <div class="pad">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Price</th>
                        <th width="280px">Actions</th>
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
                        <td>
                            <form action="{{route('products.destroy',$product->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                                <a href="{{route('products.show',$product->id)}}" class="btn btn-info">Show</a>
                                <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{$products->links() }}
            </div>
        </div>
    </body>
</html>
@endsection