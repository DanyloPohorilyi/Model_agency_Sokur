<head>
    <!-- Site Title -->
    <title>{{ 'Add model' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
    @stack('css')
</head>
@extends('layoutAdmin')
@section('content')
    {!! Form::open([
        'method' => 'POST',
        'route' => 'model.store',
        'class' => 'form-horizontal',
        'enctype' => 'multipart/form-data',
    ]) !!}
    <h2>Add a model</h2>
    <div class="description">All fields are mandatory</div>
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
            <td>Date of birth:</td>
            <td>
                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                    {!! Form::date('date', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'birthDate',
                        'placeholder' => 'Date of birth',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('date') }}</small>
                </div>
                {{-- <input type="date" name="date" id="birthDate" placeholder="Date of birth"> --}}
            </td>
        </tr>
        <tr>
            <td>Bust/Waist/Thighs</td>
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
                        'placeholder' => 'Thighs',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('hips') }}</small>
                </div>

                {{-- <input type="text" name="bust" id="bust" placeholder="Bust"> --}}
                {{-- <input type="text" name="waist" id="waist" placeholder="Waist"> --}}
                {{-- <input type="text" name="hips" id="hips" placeholder="Thighs"> --}}
            </td>
        </tr>
        <tr>
            <td>Growth:</td>
            <td>
                <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                    {!! Form::text('height', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'height',
                        'placeholder' => 'Growth',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('height') }}</small>
                </div>
                {{-- <input type="text" name="height" id="height" placeholder="Growth"> --}}
            </td>
        </tr>
        <tr>
            <td>Hair colour:</td>
            <td>
                <div class="form-group{{ $errors->has('hair') ? ' has-error' : '' }}">
                    {!! Form::text('hair', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'hair',
                        'placeholder' => 'Hair colour',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('hair') }}</small>
                </div>
                {{-- <input type="text" name="hair" id="hair" placeholder="Hair colour"> --}}
            </td>
        </tr>
        <tr>
            <td>Eye colour:</td>
            <td>
                <div class="form-group{{ $errors->has('eye') ? ' has-error' : '' }}">
                    {!! Form::text('eye', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'eye',
                        'placeholder' => 'Eye colour',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('eye') }}</small>
                </div>
                {{-- <input type="text" name="eye" id="eye" placeholder="Eye colour"> --}}
            </td>
        </tr>
        <tr>
            <td>Country:</td>
            <td>
                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                    {!! Form::text('country', null, [
                        'class' => 'form-control',
                        'required' => 'required',
                        'id' => 'country',
                        'placeholder' => 'Country',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('country') }}</small>
                </div>
                {{-- <input type="text" name="country" id="country" placeholder="Country"> --}}
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
            <td>Instagram link:</td>
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
        <tr>
            <td>Description</td>
            <td>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    {!! Form::textarea('description', null, [
                        'class' => 'form-control',
                        'placeholder' => 'The field is optional....',
                    ]) !!}
                    <small class="text-danger">{{ $errors->first('description') }}</small>
                </div>
            </td>
        </tr>
    </table>
    <div class="btn">
        {!! Form::submit('Send', ['class' => 'send']) !!}
        {{-- <button class="send" id="send">Send</button> --}}
    </div>
    {!! Form::close() !!}


@stop
