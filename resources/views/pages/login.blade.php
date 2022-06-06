@extends('layouts.auth-layout')

@section('title','Sign In')
@section('content')

    <div class="cont">
        <form method="POST" action="{{route('user.login')}}" id="signIn">
            @csrf
            <div class="form sign-in">
                <h2>Welcome</h2>
                <label><span>Email</span>
                    <input type="email" name="email" value="" required/>
                </label>
                @error('email')
                <div class="errMsg">{{$message}}</div>
                @enderror
                <label><span>Password</span>
                    <input type="password" name="password" value="" required/>
                </label>
                @error('password')
                <div class="errMsg">{{$message}}</div>
                @enderror
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <p class="forgot-pass">Forgot password?</p>
            </div>
        </form>
        <button type="submit" class="submit" form="signIn">Sign In</button>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h3>Don't have an account? Please Sign up!</h3>
                </div>
                <div class="img__text m--in">
                    <h3>If you already have an account, just sign in.</h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <form method="POST" action="{{route('user.registration')}}" id="signUp">
                @csrf
                <div class="form sign-up">
                    <h2>Create your Account</h2>
                    <label>
                        <span>Name</span>
                        <input type="text" name="name" value="" required/>
                    </label>
                    @error('name')
                    <div class="errMsg">{{$message}}</div>
                    @enderror
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" value="" required/>
                    </label>
                    @error('email')
                    <div class="errMsg">{{$message}}</div>
                    @enderror
                    <label>
                        <span>Password</span>
                        <input type="password" name="password" value="" required/>
                    </label>
                    @error('password')
                    <div class="errMsg">{{$message}}</div>
                    @enderror
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                </div>
            </form>
            <button type="submit" class="submit" form="signUp">Sign Up</button>
        </div>
    </div>
@endsection
