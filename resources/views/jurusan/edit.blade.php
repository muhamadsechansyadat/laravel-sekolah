@extends('layouts.template')

@section('title','Edit')

@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Edit Jurusan</div>
                    <form action="{{ url('jurusan/update/'.$data->id) }}" method="post" id="edit" enctype="multipart/form-data">
                        @if(session('message'))
                        <div class="alert alert-card alert-success" role="alert">
                            <strong class="text-capitalize">{{session('message')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}
                        <div class="form-group">
                            <label for="paket_keahlian" class="col-form-label">Paket Keahlian</label>
                            <input type="text" class="form-control" id="paket_keahlian" name="paket_keahlian" value="{{ $data->paket_keahlian }}" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="col-form-label">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10">{{ $data->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
							<input type="submit" value="Save" class="btn btn-lg btn-primary">
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection