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
                <h3>Enroll a new Employee</h3>
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

                <form action="{{route('employees.store')}}" method="post">    
                    @csrf
                    <label>Name:</label>
                    <input type="text" name="name" class="input-pro" placeholder=""><br/><br/>
                    <label>Email:</label>
                    <input type="email" class="input-pro" name="email" placeholder=""></input><br/><br/>   
                    <label>Gender:</label>
                    <select id="gender" class="input-pro" name="gender">
                        <option value="none" selected></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select><br/><br/>     
                    <label>Address:</label>
                    <input type="text" name="address" class="input-pro" placeholder=""><br/><br/>
                    <label>MobileNo:</label>
                    <input type="tel" id="mobile" class="input-pro" name="mobile" ><br/><br/>
                    <label >Password:</label>
                    <input type="password" class="input-pro" name="password"/><br/><br/>
                    <div class="button">
                        <button type="submit" class="btn btn-primary">Enroll</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
@endsection