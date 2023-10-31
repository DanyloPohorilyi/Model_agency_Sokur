<head>
    <!-- Site Title -->
    <title>{{ 'Apply for audition' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
    @stack('css')
</head>
@extends('layout')
@section('content')
    {!! Form::open([
        'method' => 'POST',
        'route' => 'form.store',
        'class' => 'form-horizontal',
        'enctype' => 'multipart/form-data',
    ]) !!}
    <h2>Стать моделью</h2>
    <div class="description">All fields are required to fill out</div>
    <table class="formModel">
        <tr>
            <td>Name:</td>
            <td>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::text('name', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'firstName',
                        'placeholder' => 'Name',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
                {{-- <input type="text" name="name" id="firstName" placeholder="Name"> --}}
            </td>
        </tr>
        <tr>
            <td>Surname:</td>
            <td>
                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                    {!! Form::text('surname', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'lastName',
                        'placeholder' => 'Surname',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('surname') }}</small>
                </div>
                {{-- <input type="text" name="surname" id="lastName" placeholder="Surname"> --}}
            </td>
        </tr>
        <tr>
            <td>Birthday:</td>
            <td>
                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                    {!! Form::date('date', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'birthDate',
                        'placeholder' => 'Birthday',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('date') }}</small>
                </div>
                {{-- <input type="date" name="date" id="birthDate" placeholder="Birthday"> --}}
            </td>
        </tr>
        <tr>
            <td>Bust/waist/hips</td>
            <td class="threeInOne">
                <div class="form-group{{ $errors->has('bust') ? ' has-error' : '' }}">
                    {!! Form::text('bust', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'bust',
                        'placeholder' => 'Bust',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('bust') }}</small>
                </div>

                <div class="form-group{{ $errors->has('waist') ? ' has-error' : '' }}">
                    {!! Form::text('waist', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'waist',
                        'placeholder' => 'Waist',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('waist') }}</small>
                </div>

                <div class="form-group{{ $errors->has('hips') ? ' has-error' : '' }}">
                    {!! Form::text('hips', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'hips',
                        'placeholder' => 'Hips',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('hips') }}</small>
                </div>

                {{-- <input type="text" name="bust" id="bust" placeholder="Bust"> --}}
                {{-- <input type="text" name="waist" id="waist" placeholder="Waist"> --}}
                {{-- <input type="text" name="hips" id="hips" placeholder="Hips"> --}}
            </td>
        </tr>
        <tr>
            <td>Height:</td>
            <td>
                <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                    {!! Form::text('height', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'height',
                        'placeholder' => 'Height',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('height') }}</small>
                </div>
                {{-- <input type="text" name="height" id="height" placeholder="Height"> --}}
            </td>
        </tr>
        <tr>
            <td>Hair color:</td>
            <td>
                <div class="form-group{{ $errors->has('hair') ? ' has-error' : '' }}">
                    {!! Form::text('hair', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'hair',
                        'placeholder' => 'Hair color',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('hair') }}</small>
                </div>
                {{-- <input type="text" name="hair" id="hair" placeholder="Hair color"> --}}
            </td>
        </tr>
        <tr>
            <td>Eye color:</td>
            <td>
                <div class="form-group{{ $errors->has('eye') ? ' has-error' : '' }}">
                    {!! Form::text('eye', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'eye',
                        'placeholder' => 'Eye color',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('eye') }}</small>
                </div>
                {{-- <input type="text" name="eye" id="eye" placeholder="Eye color"> --}}
            </td>
        </tr>
        <tr>
            <td>Side:</td>
            <td>
                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                    {!! Form::text('country', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'country',
                        'placeholder' => 'Side',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('country') }}</small>
                </div>
                {{-- <input type="text" name="country" id="country" placeholder="Side"> --}}
            </td>
        </tr>
        <tr>
            <td>City:</td>
            <td>
                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                    {!! Form::text('city', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'city',
                        'placeholder' => 'City',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('city') }}</small>
                </div>
                {{-- <input type="text" name="city" id="city" placeholder="City"> --}}
            </td>
        </tr>
        <tr>
            <td>Phone number:</td>
            <td>
                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    {!! Form::text('phone', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'phone',
                        'placeholder' => 'Phone number',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('phone') }}</small>
                </div>
                {{-- <input type="text" name="phone" id="phone" placeholder="Phone number"> --}}
            </td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::email('email', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'email',
                        'placeholder' => 'E-mail',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>
                {{-- <input type="email" name="email" id="email" placeholder="E-mail"> --}}
            </td>
        </tr>
        <tr>
            <td>Link to Instagram:</td>
            <td>
                <div class="form-group{{ $errors->has('inst') ? ' has-error' : '' }}">
                    {!! Form::text('inst', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'inst',
                        'placeholder' => '@nickname',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('inst') }}</small>
                </div>
                {{-- <input type="text" name="inst" id="inst" placeholder="@nickname"> --}}
            </td>
        </tr>
        <tr>
            <td>Photo:</td>
            <td>
                <div class="form-group{{ $errors->has('photo1') ? ' has-error' : '' }}">
                    {!! Form::file('photo1', ['required' => 'required', 'id' => 'photo1', 'accept' => 'image/png, image/jpeg']) !!}
                    <small class="text-danger">{{ $errors->first('photo1') }}</small>
                </div>
                {{-- <input type="file" name="photo1" id="photo1" accept="image/png, image/jpeg"> --}}
            </td>
        </tr>
        <tr>
            <td>Photo:</td>
            <td>
                <div class="form-group{{ $errors->has('photo2') ? ' has-error' : '' }}">
                    {!! Form::file('photo2', ['required' => 'required', 'id' => 'photo2', 'accept' => 'image/png, image/jpeg']) !!}
                    <small class="text-danger">{{ $errors->first('photo2') }}</small>
                </div>
                {{-- <input type="file" name="photo2" id="photo2" accept="image/png, image/jpeg"> --}}
            </td>
        </tr>
        <tr>
            <td>Photo:</td>
            <td>
                <div class="form-group{{ $errors->has('photo3') ? ' has-error' : '' }}">
                    {!! Form::file('photo3', ['required' => 'required', 'id' => 'photo3', 'accept' => 'image/png, image/jpeg']) !!}
                    <small class="text-danger">{{ $errors->first('photo3') }}</small>
                </div>
                {{-- <input type="file" name="photo3" id="photo3" accept="image/png, image/jpeg"> --}}
            </td>
        </tr>
        <tr>
            <td>Photo:</td>
            <td>
                <div class="form-group{{ $errors->has('photo4') ? ' has-error' : '' }}">
                    {!! Form::file('photo4', ['required' => 'required', 'id' => 'photo4', 'accept' => 'image/png, image/jpeg']) !!}
                    <small class="text-danger">{{ $errors->first('photo4') }}</small>
                </div>
                {{-- <input type="file" name="photo4" id="photo4" accept="image/png, image/jpeg"> --}}
            </td>
        </tr>
    </table>
    <div class="btn">
        {!! Form::submit('Send', ['class' => 'send']) !!}
        {{-- <button class="send" id="send">Send</button> --}}
    </div>
    {!! Form::close() !!}


@stop
