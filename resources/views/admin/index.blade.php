<head>
    <!-- Site Title -->
    <title>{{ 'Main' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    @stack('css')
</head>
@extends('layoutAdmin')
@section('content')
    @if (isset($data))
        @foreach ($data as $a)
            <div class="card">
                <a href="{{ route('admin.getModel', ['id' => $a->Id]) }}">

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
    @endif
@stop
{{-- <div class="card">
    <img src="assets/models/sora_chori/sora-choi1.jpg" alt="Sora Choi">
    <div class="text">
        <div class="name">Sora Choi</div>
        <div class="parametrs">
            <div class="height">179</div>
            <div class="bust">76</div>
            <div class="waist">58</div>
            <div class="hips">86</div>
            <div class="eye">brown</div>
            <div class="hair"> black</div>
            <div class="shoes">39</div>
        </div>
    </div>
</div>
<div class="card">
    <img src="assets/models/mathieu_simoneau/mathieu_simoneau_1.jpg" alt="Mathieu Simoneau">
    <div class="text">
        <div class="name">Mathieu Simoneau</div>
        <div class="parametrs">
            <div class="height">190.5</div>
            <div class="eye">brown</div>
            <div class="hair"> brown</div>
            <div class="shoes">44</div>
        </div>
    </div>
</div>
<div class="card">
    <img src="assets/models/tanya_kizko/tanya-kizko-1.jpg" alt="Tanya Kizko">
    <div class="text">
        <div class="name">Tanya Kizko</div>
        <div class="parametrs">
            <div class="height">178</div>
            <div class="bust">81</div>
            <div class="waist">64</div>
            <div class="hips">89</div>
            <div class="eye">blue</div>
            <div class="hair">light blond</div>
            <div class="shoes">38</div>
        </div>
    </div>
</div>
<div class="card">
    <img src="assets/models/kim_ji_soo/kim-ji-soo-1.jpeg" alt="Kim Ji Soo">
    <div class="text">
        <div class="name">Kim Ji Soo</div>
        <div class="parametrs">
            <div class="height">169</div>
            <div class="bust">34</div>
            <div class="waist">26</div>
            <div class="hips">39</div>
            <div class="eye">dark brown</div>
            <div class="hair">black</div>
            <div class="shoes">38</div>
        </div>
    </div>
</div>
<div class="card">
    <img src="assets/models/marta_sedcard/marta-sedcard-1.jpg" alt="Marta Sedcard">
    <div class="text">
        <div class="name">Marta Sedcard</div>
        <div class="parametrs">
            <div class="height">177</div>
            <div class="bust">86</div>
            <div class="waist">62</div>
            <div class="hips">89</div>
            <div class="eye">brown</div>
            <div class="hair">brown</div>
            <div class="shoes">40</div>
        </div>
    </div>
</div>
<div class="card">
    <img src="assets/models/natalia_vodyanova/natalia-vodyanova-1.jpg" alt="Natalia Vodyanova">
    <div class="text">
        <div class="name">Natalia Vodyanova</div>
        <div class="parametrs">
            <div class="height">176</div>
            <div class="bust">88</div>
            <div class="waist">61</div>
            <div class="hips">89</div>
            <div class="eye">brown</div>
            <div class="hair">blond</div>
            <div class="shoes">39</div>
        </div>
    </div>
</div>
<div class="card">
    <img src="assets/models/hwang_hyunjin/hwang-hyunjin-1.jpeg" alt="Hwang Hyunjin">
    <div class="text">
        <div class="name">Hwang Hyunjin</div>
        <div class="parametrs">
            <div class="height">179</div>
            <div class="eye">dark brown</div>
            <div class="hair">dark brown</div>
            <div class="shoes">39</div>
        </div>
    </div>
</div>
<div class="card">
    <img src="assets/models/kendall_jenner/kendall-jenner-1.jpg" alt="Kendall Jenner">
    <div class="text">
        <div class="name">Kendall Jenner</div>
        <div class="parametrs">
            <div class="height">179</div>
            <div class="bust">84</div>
            <div class="waist">61</div>
            <div class="hips">89</div>
            <div class="eye">brown</div>
            <div class="hair">brown</div>
            <div class="shoes">39</div>
        </div>
    </div>
</div> --}}
