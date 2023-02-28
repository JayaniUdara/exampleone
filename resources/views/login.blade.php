@extends('main')
@section('content')

<html>
@if(isset(Auth::user()->email))
        <script>window.location="success";</script>
        @endif
        @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
        @endif
        @if($message = Session::get('error'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
        @endif
        @if ($errors ->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
        @endif
<div class="">
<form action="{{ url('/checklogin') }}" method="post">
<diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
   
    <div class="mb-2 row">
        <div class="col-sm-2"></div>
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-4">
        <input type="email" class="form-control" name="email" required>
        </div>
    </div>
  
    <div class="mb-2 row">
    <div class="col-sm-2"></div>
        <label for="inputPassword" class="col-sm-2 col-form-label" >Password</label>
        <div class="col-sm-4">
        <input type="password" class="form-control" name="password" required>
        </div>
    </div>
    <div>
    <button type="submit" name="login" class="btn btn-primary">Sign in</button>
    </div>
    
</diV>
</form>
</div>
<diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
   
    <a href="{{ route('customers.create')}}"><button type="submit" class="btn btn-primary">Register Now!</button></a>
</diV>
</html>

@endsection