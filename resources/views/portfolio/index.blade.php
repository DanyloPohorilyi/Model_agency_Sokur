<head>
    <!-- Site Title -->
    <title>{{ 'Add portfolio' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style11.css') }}">
    @stack('css')
</head>
@extends('layoutAdmin')
@section('content')
    <div class="form">

        {!! Form::open([
            'method' => 'POST',
            'route' => 'portfolio.store',
            'class' => 'form-horizontal',
            'enctype' => 'multipart/form-data',
        ]) !!}
        <div class="block">
            <div class="form-group{{ $errors->has('modelSelect') ? ' has-error' : '' }}">
                {!! Form::label('modelSelect', 'Choose a model') !!}
                {{-- {!! Form::select('modelSelect',$data, null, ['id' => 'modelSelect', 'class' => 'form-control', 'required' =>
        'required']) !!} --}}
                <select class="form-control" name="modelSelect" required id="modelSelect">
                    @foreach ($data as $item)
                        <option value="{{ $item->Id }}">{{ $item->Name }} {{ $item->Surname }}</option>
                    @endforeach
                </select>
                <small class="text-danger">{{ $errors->first('modelSelect') }}</small>
            </div>
        </div>
        <div class="block">
            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                {!! Form::label('photo', 'Photo:') !!}
                {!! Form::file('photo', ['required' => 'required', 'accept' => 'image/*']) !!}
                <small class="text-danger">{{ $errors->first('photo') }}</small>
            </div>
        </div>
        <div class="btn-sbm">
            {!! Form::submit('Download', ['class' => 'send']) !!}
        </div>


        {{-- {!! Form::label('modekSelect', 'Выбирете модель') !!}
    <input type="text" list="modekSelect">
    <datalist name='modekSelect' id = "modekSelect">
        @foreach ($data as $k => $model)

            <option value="{{$k}}"> {{$model}}</option>
    @endforeach
    </datalist> --}}


        {!! Form::close() !!}
    </div>

@stop
