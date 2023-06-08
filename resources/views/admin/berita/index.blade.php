@extends('admin.app')

@section('title', 'berita')

@section('container')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Gambar</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>15-06-2023</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis neque eligendi perferendis in,
                    consequuntur soluta iste ducimus placeat dolores necessitatibus harum numquam iusto labore rerum
                    reiciendis, maxime veniam, facere nemo.</td>
            </tr>
        </tbody>
    </table>
@endsection
