@extends('layouts.template')

@section('title','Create')

@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Input Data Guru</div>
                    <form action="{{ url('guru/save') }}" method="post" id="create" enctype="multipart/form-data">
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
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" required="">
                        </div>
                        <div class="form-group">
                        	<label for="email" class="col-form-label">e-mail</label>
                        	<input type="email" class="form-control" name="email" id="email" required="">
                        </div>
                        <div class="form-group">
                            <label for="id_mapel" class="col-form-label">ID Mata Pelajaran</label>
                            <select name="id_mapel" id="id_mapel" class="form-control" required="">
                                <option value=""></option>
                                <option value="1">Matematika</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-form-label">Status</label>
                            <select name="status" id="status" class="form-control" required="">
                                <option value=""></option>
                                <option value="1">Guru</option>
                                <option value="2">Asisten</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_pj_rayon" class="col-form-label">Rayon</label>
                            <select name="id_pj_rayon" id="id_pj_rayon" class="form-control" required="">
                                <option value=""></option>
                                @foreach(Helper::rayon() as $field)
                                <option value="{{ $field->id }}">{{ $field->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_tlp" class="col-form-label">NO Telepon</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                </div>
                                <input type="number" class="form-control" name="no_tlp" id="no_tlp" required="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="motto" class="col-form-label">Motto</label>
                            <textarea name="motto" id="motto" class="form-control" cols="30" rows="10" required=""></textarea>
                        </div>
                        <div class="form-group">
                                <label for="foto" class="col-form-label">Foto</label>
                                <input type="file" name="foto" class="form-control" required="Wajib Di Isi">
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