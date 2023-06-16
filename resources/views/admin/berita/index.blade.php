@extends('admin.app')

@section('title', 'berita')

@section('container')
<br><br><br>
<div class="container">
    <a href="/berita/create" class="btn btn-success mb-3">Tambah +</a>
    <div class="table-responsive">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            @foreach ($berita as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->keterangan }}</td>
                <td>{{ $row->gambar }}</td>
                <td>{{ $row->created_at->diffForHumans() }}</td>
                <td>
                    <button type="button" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-info">Edit</button>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>


@endsection