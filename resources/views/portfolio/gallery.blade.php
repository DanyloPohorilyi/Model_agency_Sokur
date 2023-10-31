<head>
    <!-- Site Title -->
    <title>Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/style8.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    @stack('css')
</head>
@extends('layoutGallery')
@section('content')
    <div class="pin_container">
        @if ($count)

            @foreach ($data as $p)
                <?php
                [$width, $height] = getimagesize(public_path() . $p->ImagePath);
                ?>

                @if ($width > $height)
                    <div class="card card_wide"><a href="{{ asset($p->ImagePath) }}" target="_blank"><img
                                src="{{ asset($p->ImagePath) }}" alt="image{{ $p->Id }}" srcset=""></a></div>
                @elseif ($width == $height)
                    <div class="card card_small"><a href="{{ asset($p->ImagePath) }}" target="_blank"><img
                                src="{{ asset($p->ImagePath) }}" alt="image{{ $p->Id }}" srcset=""></a></div>
                @elseif ($width * 16 < $height * 11)
                    <div class="card card_large"><a href="{{ asset($p->ImagePath) }}" target="_blank"><img
                                src="{{ asset($p->ImagePath) }}" alt="image{{ $p->Id }}" srcset=""></a></div>
                @else
                    <div class="card card_medium"><a href="{{ asset($p->ImagePath) }}" target="_blank"><img
                                src="{{ asset($p->ImagePath) }}" alt="image{{ $p->Id }}" srcset=""></a></div>
                @endif
            @endforeach
        @else
            <h3 style="margin-top: 2vh">In the process of filming...</h3>
        @endif
        {{-- <div class="card card_wide"></div>
        <div class="card card_medium"></div>
        <div class="card card_large"></div>
        <div class="card card_medium"></div>
        <div class="card card_small"></div>
        <div class="card card_large"></div>
        <div class="card card_medium"></div>
        <div class="card card_small"></div>
        <div class="card card_medium"></div>
        <div class="card card_small"></div>
        <div class="card card_medium"></div>
        <div class="card card_large"></div>
        <div class="card card_medium"></div>
        <div class="card card_small"></div>
        <div class="card card_medium"></div>
        <div class="card card_large"></div> --}}
    </div>
    </div>
@stop
