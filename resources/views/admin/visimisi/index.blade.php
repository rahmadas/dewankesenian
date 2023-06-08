@extends('admin.app')
@section('title', 'visimisi')

@section('container')

    <table class="table">
        <a href="{{ route('visimisi.create') }}"><button type="button" class="btn btn-success">+ Tambah Data</button></a>
        <thead>
            <tr>
                <th scope="col" width="50px">No</th>
                <th scope="col" width="100px">Visi</th>
                <th scope="col" width="100px">Misi</th>
                <th scope="col" width="200px">Action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td>
                    <a href="/admin/berita/show"><button type="button" class="btn btn-primary">Lihat</button></a>
                    <a href="/admin/delete"><button type="button" class="btn btn-danger">Hapus</button></a>
                    <a href="/admin/update"><button type="button" class="btn btn-info">Ubah</button></a>
                </td>
            </tr>

        </tbody>
    </table>
@endsection
