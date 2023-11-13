@extends('layout')

@section('content')
    <h2>Daftar Buku</h2>
    <a href="/products/add" class="btn btn-success mb-3">Tambah Buku</a>
    <table class="table">
        <thead>
            <tr>
                <th>Book ID</th>
                <th>Judul Buku</th>
                <th>Author</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->bookId }}</td>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->author }}</td>
                    <td>Rp.{{ $book->harga }}</td>
                    <td>
                        <div style="display: flex; align-items: center;">
                            <a href="{{ route('getDetails', [$book->bookId]) }}" class="btn btn-primary mb-3" style="margin-right: 5px;">Detail</a>
                            <a href="{{route('bookUpdateView', [$book->bookId])}}" class="btn btn-warning mb-3" style="margin-right: 5px;">Edit</a>
                            <form method="POST" action="{{ route('bookDelete', ['id' => $book->bookId]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Delete
                                </button>
                                
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Book</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Yakin ingin menghapus data ini?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-danger" onclick="alert('Data berhasil dihapus')" >Ya</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>                                             
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('title')
    <h1>Welcome to RasyBook Collection</h1>
@endsection
