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
            

            <div class="Pro">
                <h3>Add a new Product</h3>
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

                <form action="{{route('products.store')}}" method="post">    
                    @csrf
                    <label>Name:</label>
                    <input type="text" name="name" class="input-pro" placeholder=""><br/><br/>
                    <label>Detail:</label>
                    <textarea class="input-pro" style="height:60px" name="detail" placeholder=""></textarea><br/><br/>   
                    <label>Price:</label>
                    <input type="text" name="price" class="input-pro" placeholder=""><br/><br/>     
                    <div class="button">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
@endsection