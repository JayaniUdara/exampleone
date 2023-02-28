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
            

            <div class="Pro">
                <h3>Edit a Product</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('products.update',$product->id)}}" method="post">    
                @method('PUT')    
                @csrf
                    <label>Name:</label>
                    <input type="text" name="name" value="{{$product->name}}" class="input-pro" placeholder=""><br/><br/>
                    <label>Detail:</label>
                    <textarea class="input-pro" style="height:60px" name="detail" placeholder="">{{$product->detail}}</textarea><br/><br/>   
                    <label>Price:</label>
                    <input type="text" name="price" value="{{$product->price}}" class="input-pro" placeholder=""><br/><br/>     
                    <div class="button">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
@endsection