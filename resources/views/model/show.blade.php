<head>
    <!-- Site Title -->
    <title>Model editor</title>
    <link rel="stylesheet" href="{{ asset('css/style8.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style9.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tableStyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @stack('css')
</head>
@extends('layoutAdmin')
@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Year of birth</th>
                <th scope="col">Photo</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $model)
                <tr>
                    <th scope="row">{{ $model->Id }}</th>
                    <td>{{ $model->Name }}</td>
                    <td>{{ $model->Surname }}</td>
                    <td>{{ $model->DateOfBirth }}</td>
                    <td><img src="{{ str_replace(public_path(), '', public_path() . $model->PhotoOne) }}" alt="hi">
                    </td>
                    <td><a href="{{ route('model.edit', ['model' => $model->Id]) }}">Edit</a></td>
                    <td><a href="{{ route('model.delete', ['model' => $model->Id]) }}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@stop
