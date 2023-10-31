<head>
    <!-- Site Title -->
    <title>{{ $obj->Name }} {{ $obj->Surname }}</title>
    <link rel="stylesheet" href="{{ asset('css/style8.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style9.css') }}">
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
                <p>Instagram: <i>{{ $obj->InstagramNickname }}</i></p>
                <p>{{ $obj->Description }}</p>
            </div>
        </div>
        <div class="col">
            <div class="gallery">
                <ul class="slides">
                    <li id="photo1"><img
                            src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoOne)) }}"
                            alt="" /></li>
                    <li id="photo2"><img
                            src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoTwo)) }}"
                            alt="" /></li>
                    <li id="photo3"><img
                            src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoThree)) }}"
                            alt="" /></li>
                    <li id="photo4"><img
                            src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoFour)) }}"
                            alt="" /></li>
                </ul>
                <ul class="thumbnails">
                    <li>
                        <a href="#photo1"><img
                                src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoOne)) }}" /></a>
                    </li>
                    <li>
                        <a href="#photo2"><img
                                src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoTwo)) }}" /></a>
                    </li>
                    <li>
                        <a href="#photo3"><img
                                src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoThree)) }}" /></a>
                    </li>
                    <li>
                        <a href="#photo4"><img
                                src="{{ asset(str_replace('D:\OpenServer\domains\sma\public/', '', $obj->PhotoFour)) }}" /></a>
                    </li>
                </ul>
                {{-- <img src="" alt="{{$obj->Name}} Photo">
            <img src="{{ asset(str_replace("D:\OpenServer\domains\sma\public/","",  $obj->PhotoTwo ) ) }}" alt="{{$obj->Name}} Photo">
            <img src="{{ asset(str_replace("D:\OpenServer\domains\sma\public/","",  $obj->PhotoThree ) ) }}" alt="{{$obj->Name}} Photo">
            <img src="{{ asset(str_replace("D:\OpenServer\domains\sma\public/","",  $obj->PhotoFour ) ) }}" alt="{{$obj->Name}} Photo"> --}}
            </div>
        </div>
        <a href="{{ route('admin.gallery', ['id' => $obj->Id]) }}">Portfolio</a>
    </div>
@stop
