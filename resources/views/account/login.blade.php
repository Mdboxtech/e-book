@extends('layout.acct')

@section('content')



 <section  class="login-dark">
    <form style="top:300px" action="authenticate" method="post">
        @csrf
        <h2 class="visually-hidden">Login Form</h2>
        {{-- @error(session('error'))
        <small class="text-danger">{{session('error')}}</small>
        @enderror --}}
        @if (session('error'))
        <small class="text-danger">{{session('error')}}</small>
        @endif
        @if (session('success'))
        <small class="text-danger">{{session('success')}}</small>
        @endif
        @error('username')
        <small class="text-danger">{{$message}}</small>
        @enderror
        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
        <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Email or username">

        </div>
        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a>
        <a class="forgot" href="/register">i don`t have an account</a>

    </form>
</section>

@endsection
