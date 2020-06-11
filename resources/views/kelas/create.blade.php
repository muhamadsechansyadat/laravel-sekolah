@extends('layouts.template')

@section('title','Create')

@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Input Kelas Baru</div>
                    <form action="{{ url('kelas/save') }}" method="post" id="create" enctype="multipart/form-data">
                        @if(session('message'))
                        <div class="alert alert-card alert-success" role="alert">
                            <strong class="text-capitalize">{{session('message')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama Kelas</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="RPL XII-1" required>
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