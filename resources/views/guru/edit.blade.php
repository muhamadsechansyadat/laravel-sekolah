@extends('layouts.template')

@section('title','Edit')

@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Input Data Guru</div>
                    <form action="{{ url('guru/update/'.$data->id) }}" method="post" id="create" enctype="multipart/form-data">
                        @if(session('message'))
                        <div class="alert alert-card alert-success" role="alert">
                            <strong class="text-capitalize">{{session('message')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}" required="">
                        </div>
                        <div class="form-group">
                        	<label for="email" class="col-form-label">e-mail</label>
                        	<input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}" required="">
                        </div>
                        <div class="form-group">
                            <label for="id_mapel" class="col-form-label">ID Mata Pelajaran</label>
                            <select name="id_mapel" id="id_mapel" class="form-control" required="">
                                <option value=""></option>
                                <option value="1" @if($data->id_mapel == 1) selected @endif>Matematika</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-form-label">Status</label>
                            <select name="status" id="status" class="form-control" required="">
                                <option value=""></option>
                                
                                <option value="1" @if($data->status == 1) selected @endif>Guru</option>
                                <option value="2" @if($data->status == 2) selected @endif>Asisten</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_pj_rayon" class="col-form-label">Rayon</label>
                            <select name="id_pj_rayon" id="id_pj_rayon" class="form-control" required="">
                                <option value=""></option>
                                @foreach(\App\Models\Rayon::get() as $field)
                                <option value="{{ $field->id }}" @if($data->id_pj_rayon == $field->id) selected @endif>{{ $field->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_tlp" class="col-form-label">NO Telepon</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                </div>
                                <input type="number" class="form-control" name="no_tlp" id="no_tlp" required="" aria-describedby="basic-addon1" value="{{ $data->no_tlp }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="motto" class="col-form-label">Motto</label>
                            <textarea name="motto" id="motto" class="form-control" cols="30" rows="10" required="">{{ $data->motto }}</textarea>
                        </div>
                        <div class="form-group">
                                <label for="foto" class="col-form-label">Foto</label>
                                <input type="file" name="foto" class="form-control">
                                <input type="text" class="form-control" readonly="" value="{{ public_path('files/'.$data->foto) }}">
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