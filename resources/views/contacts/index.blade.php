<head>
    <!-- Site Title -->
    <title>{{ 'Contacts' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style6.css') }}">
    @stack('css')
</head>
@extends('layout')
@section('content')
    <div class="card">
        <h4>Kiev</h4>
        <div class="dot"><img src="{{ asset('assets/images/dry-clean.png') }}" alt=""></div>
        <p>
            General Director / Co-Founder <br>
            Marina Skiba <br>
            email: fpmodelsbooking@gmail.com <br>
            International Booking <br>
            Taisiya <br>
            email: fpmodelagency@gmail.com <br>
            School in Kiev <br>
            Phone: +380631775439 <br>
            Kiev, Bolshaya Vasilkovskaya 27, floor 3 office 12</p>

    </div>
    <div class="card">
        <h4>Paris</h4>
        <div class="dot"><img src="{{ asset('assets/images/dry-clean.png') }}" alt=""></div>
        <p>
            Chief Executive Officer / Co-founder<br>
            Ivan Pasko<br>
            email: fpmodelsbooking@gmail.com <br>
            International bookings<br>
            Taisia<br>
            email: fpmodelagency@gmail.com <br>
            School in Paris<br>
            Phone: +9659661481381 <br>
            14 Rue Sainte-Anne<br>
        </p>
    </div>
    <div class="card">
        <h4>New York</h4>
        <div class="dot"><img src="{{ asset('assets/images/dry-clean.png') }}" alt=""></div>
        <p>
            Chief Executive Officer / Co-founder<br>
            Ivan Pasko<br>
            email: fpmodelsbooking@gmail.com <br>
            International bookings<br>
            Taisia<br>
            email: fpmodelagency@gmail.com <br>
            School in Paris<br>
            Phone: +9659661481381 <br>
            2801 Carlisle Blvd NE <br>
        </p>
    </div>
@stop
