@extends('layouts.main')

@section('content')

        <style>
            .btn-link {
                background: none;
                border: none;
                color: #0077b6;
                text-decoration: underline;
                cursor: pointer;
                padding: 0;
                font-size: inherit;
            }

            .table th {
                background-color: #0077b6;
                color: #f2a154;
            }
        </style>

    <div class="container mt-5">
        <h1 class="title text-center">list pencarian orang</h1>
        <a href="/adddpo" class="btn btn-success">Add Dpo</a>
        <div class="text-center">
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th scope="col">kakanda/adinda</th>
                        <th scope="col">bounty</th>
                        <th scope="col">CRUD BUTTON</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dpos as $dpo)
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-primary m-3" style="width: 300px; height:65px;"
                                        onclick="window.location='{{ route('dpo.keterangan', ['id' => $dpo->id]) }}'">
                                        {{ $dpo->nama }}
                                    </button>
                                </div>

                            </td>
                            <td>{{ $dpo->bounty }}</td>
                            <td>
                                <a href="/editdpo/{{$dpo->id}}" class="btn btn-primary">Edit</a>
                                <a href="/delete/{{$dpo->id}}" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$dpos->links()}}
        </div>
    </div>
@endsection

