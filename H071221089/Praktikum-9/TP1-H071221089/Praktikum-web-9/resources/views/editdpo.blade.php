@extends('layouts.main')

@section('content')

    @section('title')
        Edit dpo
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

    <div class="registration-box">
        <div class="registration-head">
            <h3>Edit dpo</h3>
        </div>
        <div>
            <form action="/updatedpo/{{$data->id}}" method="post">
                @csrf
                <div class="registration-body">
                    <input type="text" name="nama" placeholder="nama" value="{{$data->nama}}" required>
                    <input type="text" name="keterangan" placeholder="keterangan" value="{{$data->keterangan}}" required>
                    <input type="text" name="bounty" placeholder="bounty" value="{{$data->bounty}}" required>
                </div>
                <div class="menubtn">
                    <a href="/">Back</a>
                    <input id="submit" type="submit" value="Update"></input>
                </div>
        </div>
        </form>
    </div>
    @endsection
    </div>
