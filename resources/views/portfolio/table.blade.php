<head>
    <!-- Site Title -->
    <title>Portfolio Editor</title>
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
                <th scope="col">Photo</th>
                <th scope="col">First Name Last Name</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $photo)
                <tr>
                    <th scope="row">{{ $photo->Id }}</th>
                    <td><img src="{{ str_replace(public_path(), '', public_path() . $photo->ImagePath) }}" alt="hi">
                    </td>
                    <?php
                    $myModel = null;
                    foreach ($model as $m) {
                        if ($photo->ModelId == $m->Id) {
                            $myModel = $m;
                        }
                    }
                    ?>
                    <td>{{ $myModel->Name }} {{ $myModel->Surname }}</td>
                    <td><a href="{{ route('portfolio.edit', ['portfolio' => $photo->Id]) }}">Edit</a></td>
                    <td><a href="{{ route('portfolio.delete', ['portfolio' => $photo->Id]) }}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@stop
