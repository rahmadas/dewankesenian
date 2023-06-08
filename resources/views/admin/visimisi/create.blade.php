@extends('admin.app')
@section('title', 'Create visimisi')

@section('container')


    <div class="row">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('visimisi.index') }}"> Back</a>
        </div>
    </div>
    <form action="{{ route('visimisi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Visi</strong>
                    <textarea class="form-control" style="height:150px" name="visi" placeholder="visi"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Misi</strong>
                    <textarea class="form-control" style="height:150px" name="misi" placeholder="misi"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
