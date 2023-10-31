<head>
    <!-- Site Title -->
    <title>{{ "Login" }}</title>
    @stack('css')
</head>
@extends('layoutReg')
@section('content')
<div class="logo">
    <img src="{{ asset('assets/images/sma.png') }}" alt="">
</div>
<div class="logo">
    <img src="{{ asset('assets/images/sma.png') }}" alt="">
</div>
<div class="logo">
    <img src="{{ asset('assets/images/sma.png') }}" alt="">
</div>
<div class="logo">
    <img src="{{ asset('assets/images/sma.png') }}" alt="">
</div>
<div class="logo">
    <img src="{{ asset('assets/images/sma.png') }}" alt="">
</div>
<div class="logo">
    <img src="{{ asset('assets/images/sma.png') }}" alt="">
</div>
        <div class="container">
            <div class="card">
                <h2>Log in</h2>

                {!! Form::open(['method' => 'POST', 'route' => 'registration.store', 'class' => 'form-horizontal']) !!}
                
                {!! Form::label('login', 'Login:') !!}
                <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                {!! Form::text('login', null, ['class' => 'form-control', 'required' => 'required']) !!}
                <small class="text-danger">{{ $errors->first('login') }}</small>
                </div>
                
                {!! Form::label('password', 'Password:') !!}
                <div class"form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                </div>
                
                {!! Form::submit("Enter", ['class' => 'sbm-btn']) !!}
                {!! Form::close() !!}
            </div>
            <a href="{{ route('home.index') }}">Home page</a>
        </div>
        <div class="logo">
            <img src="{{ asset('assets/images/sma.png') }}" alt="">
        </div>
        <div class="logo">
            <img src="{{ asset('assets/images/sma.png') }}" alt="">
        </div>
        <div class="logo">
            <img src="{{ asset('assets/images/sma.png') }}" alt="">
        </div>
        <div class="logo">
            <img src="{{ asset('assets/images/sma.png') }}" alt="">
        </div>
        <div class="logo">
            <img src="{{ asset('assets/images/sma.png') }}" alt="">
        </div>
        <div class="logo">
            <img src="{{ asset('assets/images/sma.png') }}" alt="">
        </div>
@stop