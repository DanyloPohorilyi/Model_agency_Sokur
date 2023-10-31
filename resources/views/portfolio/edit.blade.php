<head>
    <!-- Site Title -->
    <title>{{ 'Edit portfolio' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style11(edit).css') }}">
    @stack('css')
</head>
@extends('layoutAdmin')
@section('content')
    <div class="form">

        {!! Form::open([
            'method' => 'PATCH',
            'route' => ['portfolio.update', $object->Id],
            'class' => 'form-horizontal',
            'enctype' => 'multipart/form-data',
        ]) !!}
        <div class="block">
            <div id="display_image" style="background-image: url({{ asset($object->ImagePath) }})"></div>

            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                {!! Form::file('photo', ['accept' => 'image/*', 'id' => 'photo']) !!}
                <small class="text-danger">{{ $errors->first('photo') }}</small>
            </div>
        </div>
        <div class="block" id="blockSelect">
            <div id="special" class="form-group{{ $errors->has('modelSelect') ? ' has-error' : '' }}">
                {!! Form::label('modelSelect', 'Model') !!}
                <select class="form-control" name="modelSelect" required id="modelSelect">
                    @foreach ($data as $item)
                        @if ($item->Id == $object->ModelId)
                            <option value="{{ $item->Id }}" selected>{{ $item->Name }} {{ $item->Surname }} </option>
                        @else
                            <option value="{{ $item->Id }}">{{ $item->Name }} {{ $item->Surname }}</option>
                        @endif
                    @endforeach
                </select>
                <small class="text-danger">{{ $errors->first('modelSelect') }}</small>
            </div>
            <div class="btn-sbm">
                {!! Form::submit('Download', ['class' => 'send']) !!}
            </div>
        </div>
    </div>


    {!! Form::close() !!}

    <script>
        const image_input = document.querySelector("#photo");
        image_input.addEventListener("change", function() {
            const reader = new FileReader();
            reader.addEventListener("load", () => {
                const uploaded_image = reader.result;
                document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
            });
            reader.readAsDataURL(this.files[0]);
        });
    </script>
    {{-- {!! Form::label('modekSelect', 'Выбирете модель') !!}
    <input type="text" list="modekSelect">
    <datalist name='modekSelect' id = "modekSelect">
        @foreach ($data as $k => $model)

            <option value="{{$k}}"> {{$model}}</option>
    @endforeach
    </datalist> --}}



@stop
