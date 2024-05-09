@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title')
        Homepage
    @endsection
    <style>
        th,td {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="product" >
        <div class="container">
            <h1 class="title mt-3 text-center">Call Of Duty Character Lists</h1>
            <a href="/addcharacter" class="btn" style="background-color: green;">Add Character</a>
            <table class="table table-bordered mt-4 text-center" style="margin-bottom: 75px ">
                <thead>
                    <tr>
                        <th scope="col">Karakter</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Nama Panggilan</th>
                        <th scope="col">CRUD BUTTON</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($character as $row)
                        <tr>
                            <td>{{$row->character}}</td>
                            <td>{{$row->PlaceOfBirth}}</td>
                            <td>{{$row->unity}}</td>
                            <td>{{$row->nickName}}</td>
                            <td>
                                <a href="/viewcharacter/{{$row->id}}" class="btn btn-warning">View</a>
                                <a href="/editcharacter/{{$row->id}}" class="btn btn-primary">Edit</a>
                                <a href="/delete/{{$row->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</body>

</html>

