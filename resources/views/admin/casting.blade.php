<head>
    <!-- Site Title -->
    <title>{{ 'Casting' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    @stack('css')
</head>
@extends('layoutAdmin')
@section('content')

    @if (isset($data) && count($data))
        @foreach ($data as $a)
            <div class="card">
                <a href="{{ route('admin.show', ['admin' => $a->Id]) }}">

                    <img src="{{ str_replace('D:\OpenServer\domains\sma\public/', '', $a->PhotoOne) }}"
                        alt="{{ $a->Name }} {{ $a->Surname }}">
                    <div class="text">
                        <div class="name">{{ $a->Name }} {{ $a->Surname }}</div>
                        <div class="parametrs">
                            <div class="height">{{ $a->Height }}</div>
                            <div class="bust">{{ $a->Bust }}</div>
                            <div class="waist">{{ $a->Waist }}</div>
                            <div class="hips">{{ $a->Hips }}</div>
                            <div class="eye">{{ $a->EyeColor }}</div>
                            <div class="hair">{{ $a->HairColor }}</div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    @else
        <h3 class="warning">There are no candidates!</h3>
    @endif
@stop
