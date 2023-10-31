<head>
    <!-- Site Title -->
    <title>{{ $obj->Name }} {{ $obj->Surname }}</title>
    <link rel="stylesheet" href="{{ asset('css/style8.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style10.css') }}">
    @stack('css')
</head>
@extends('layoutAdmin')
@section('content')
    <?php
    use Carbon\Carbon;
    ?>
    <div class="page">
        <div class="col">
            <h1>{{ $obj->Name }} {{ $obj->Surname }}</h1>
            <div class="row">
                <h5>{{ date('d F Y', strtotime($obj->DateOfBirth)) }}</h5>
                <h5>{{ $obj->Country }}, {{ $obj->City }}</h5>
            </div>
            <div class="parametrs">
                <p>Bust: <i>{{ $obj->Bust }}</i></p>
                <p>Waist: <i>{{ $obj->Waist }}</i></p>
                <p>Hips: <i>{{ $obj->Hips }}</i></p>
                <p>Height: <i>{{ $obj->Height }}</i></p>
                <p>Hair color: <i>{{ $obj->HairColor }}</i></p>
                <p>Eye color: <i>{{ $obj->EyeColor }}</i></p>
                <p>Phone: <i>{{ $obj->Phone }}</i></p>
                <p>Post office: <i>{{ $obj->Email }}</i></p>
                <p>instagram: <i>{{ $obj->InstagramNickname }}</i></p>
            </div>
        </div>
        <div class="col">
            <div class="gallery">

                <img src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoOne)) }}"
                    alt="{{ $obj->Name }} Photo">
                <img src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoTwo)) }}"
                    alt="{{ $obj->Name }} Photo">
                <img src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoThree)) }}"
                    alt="{{ $obj->Name }} Photo">
                <img src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoFour)) }}"
                    alt="{{ $obj->Name }} Photo">
            </div>
        </div>
    </div>
    <div class="form">
        <div class="button">
            {!! Form::open([
                'method' => 'POST',
                'url' => route('admin.delete', ['id' => $obj->Id]),
                'class' => 'form-horizontal',
            ]) !!}
            {!! Form::hidden('Id', $obj->Id, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! Form::submit('Delete', ['class' => 'send']) !!}
            {!! Form::close() !!}
        </div>
        <div class="button">
            {!! Form::open(['method' => 'POST', 'route' => 'admin.store', 'class' => 'form-horizontal']) !!}
            {!! Form::hidden('Id', $obj->Id, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! Form::submit('Add to agency', ['class' => 'send']) !!}
            {!! Form::close() !!}
        </div>

    </div>
@stop
