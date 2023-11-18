@extends("layouts.main")

@section('content')

    <style>
        body {
            background-color: #f8f9fa;
        }

        .product {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            padding: 20px;
        }

        .title {
            color: #007bff;
        }

        .table {
            margin-top: 20px;
            border: 2px solid black;
        }

        th, td {
            text-align: center;
            border: 2px solid black;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table>thead {
            vertical-align: middle;
        }
    </style>

    <div class="product">
        <div class="container text-center">
            <h1 class="title">details orang hilang</h1>

            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th scope="col">nama</th>
                        <th scope="col">keterangan</th>
                        <th scope="col">bounty</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($dpos as $dpo)
                        <tr>
                            <td>{{ $dpo->nama }}</td>
                            <td>{{ $dpo->keterangan }}</td>
                            <td>{{ $dpo->bounty }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection

