@extends('admin.app')

@section('title', 'berita')

@section('container')
<br><br><br>
<div class="container">
    <a href="/berita" class="btn btn-primary mb-3">Kembali</a>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="from-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama">
                </div>

                <div class="from-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="gambar" placeholder="gambar">
                </div>

                <div class="from-group">
                    <label for="">Keterangan</label>
                    <textarea name="keterangan" id="" cols="30" class="form-control" placeholder="keterangan"
                        rows="10"></textarea>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection