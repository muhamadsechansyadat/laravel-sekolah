@extends('layouts.template')

@section('title','Edit')

@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Edit Kelas</div>
                    <form action="{{ url('kelas/update/'.$data->id) }}" method="post" id="create" enctype="multipart/form-data">
                        @if(session('message'))
                        <div class="alert alert-card alert-success" role="alert">
                            <strong class="text-capitalize">{{session('message')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama Kelas</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="RPL XII-1" value="{{ $data->nama }}" required>
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