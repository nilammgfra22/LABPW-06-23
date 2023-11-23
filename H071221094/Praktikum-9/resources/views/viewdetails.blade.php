@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title')
        Character
    @endsection
    <link rel="stylesheet" href="css/style.css">
    <style>
        th,td {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="product" >
        <div class="container">
            <h1 class="title mt-3 text-center">Character Details</h1>
            <a href="/" class="btn btn-success">Back</a>
            <table class="table table-bordered mt-4 text-center" style="margin-bottom: 75px ">
                <thead>
                    <tr>
                        <th scope="col">Karaker</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Kesatuan</th>
                        <th scope="col">Nama Panggilan</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Riwayat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($character as $row)
                        <tr>
                            <td>{{$row->character}}</td>
                            <td>{{$row->PlaceOfBirth}}</td>
                            <td>{{$row->unity}}</td>
                            <td>{{$row->nickName}}</td>
                            <td>{{$row->age}}</td>
                            <td>{{$row->history}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>

</html>

