@extends('layouts.main')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title')
        Add Hero
    @endsection
    <style>
        .registration-box {
            width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid;
            border-radius: 10px;
            padding: 20px 80px 30px;
            margin: 40px auto;
        }

        .registration-head h3 {
            margin: 0;
            padding-bottom: 20px;
        }

        .registration-body {
            display: flex;
            flex-direction: column;
        }

        .registration-body input {
            margin-bottom: 20px;
            height: 40px;
            width: 250px;
        }

        .registration-body button {
            background-color: rgb(29, 174, 255);
            color: black;
            border-radius: 5px;
            position: relative;
            right: 100;
            width: 100px;
            height: 35px;
        }

        .menubtn {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .menubtn a {
            display: flex;
            align-items: center;
            text-decoration: none;
            width: 100px;
            height: 40px;
        }

        .menubtn input {
            background-color: rgb(29, 174, 255);
            border-radius: 5px;
            width: 100px;
            height: 40px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="registration-box">
        <div class="registration-head">
            <h3>Add Character</h3>
        </div>
        <div>
            <form action="/insertcharacter" method="post">
                @csrf
                <div class="registration-body">
                    <input type="text" name="character" placeholder="Karakter" required>
                    <input type="text" name="PlaceOfBirth" placeholder="Tempat Lahir" required>
                    <input type="text" name="unity" placeholder="Unit" required>
                    <input type="text" name="nickName" placeholder="Nama Panggilan">
                    <input type="text" name="age" placeholder="Umur">
                    <input type="text" name="history" placeholder="Riwayat">
                </div>
                <div class="menubtn">
                    <a href="/">Back</a>
                    <input id="submit" type="submit" value="ADD"></input>
                </div>
        </div>
        </form>
    </div>
    @endsection
    </div>
