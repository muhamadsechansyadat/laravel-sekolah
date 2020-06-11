@extends('layouts.template')

@section('title','Create')

@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Input Data Siswa</div>
                    <form action="{{ url('siswa/update/'.$data->id) }}" method="post" id="create" enctype="multipart/form-data">
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
                            <label for="nis" class="col-form-label">NIS</label>
                            <input type="text" class="form-control" id="nis" name="nis" value="{{ $data->nis }}" required readonly="">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama }}" required="">
                        </div>
                        <div class="form-group">
                            <label for="kelamin" class="col-form-label">Kelamin</label>
                            <select name="kelamin" id="kelamin" class="form-control" required="">
                                <option value=""></option>
                                <option value="1" @if($data->kelamin=='1') selected @endif>Laki - Laki</option>
                                <option value="2" @if($data->kelamin=='2') selected @endif>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="col-form-label">Agama</label>
                            <select name="agama" id="agama" class="form-control" required="">
                                <option value=""></option>
                                <option value="islam" @if($data->agama=='islam') selected @endif>Islam</option>
                                <option value="protestan" @if($data->agama=='protestan') selected @endif>Protestan</option>
                                <option value="katolik" @if($data->agama=='katolik') selected @endif>Katolik</option>
                                <option value="hindu" @if($data->agama=='hindu') selected @endif>Hindu</option>
                                <option value="bhuda" @if($data->agama=='bhuda') selected @endif>Bhuda</option>
                                <option value="kong hu chu" @if($data->agama=='kong hu chu') selected @endif>Kong Hu Chu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $data->tempat_lahir }}" required="">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{!! substr($data->tanggal_lahir,0,10) !!}" required="">
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10" required="">{{ $data->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="no_tlp" class="col-form-label">NO Telepon</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                </div>
                                <input type="number" class="form-control" name="no_tlp" id="no_tlp" value="{{ $data->no_tlp }}" required="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_rayon" class="col-form-label">Rayon</label>
                            <select name="id_rayon" id="id_rayon" class="form-control" required="">
                                <option value=""></option>
                                @foreach(Helper::rayon() as $field)
                                <option value="{{ $field->id }}" @if($data->id_rayon == $field->id) selected @endif>{{ $field->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_jurusan" class="col-form-label">Jurusan</label>
                            <select name="id_jurusan" id="id_jurusan" class="form-control" required="">
                                <option value=""></option>
                                @foreach(Helper::jurusan() as $field)
                                <option value="{{ $field->id }}" @if($data->id_jurusan == $field->id) selected @endif>{{ $field->paket_keahlian }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_kelas" class="col-form-label">Kelas</label>
                            <select name="id_kelas" id="id_kelas" class="form-control" required="">
                                <option value=""></option>
                                @foreach(Helper::kelas() as $field)
                                <option value="{{ $field->id }}" @if($data->id_kelas == $field->id) selected @endif>{{ $field->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="foto" class="col-form-label">Foto</label>
                                <input type="file" name="foto" class="form-control">
                                <input type="text" class="form-control" readonly="" value="{{ public_path('files/'.$data->foto) }}">
                            </div>
                        <div class="form-group">
							<input type="submit" value="Update" class="btn btn-lg btn-primary">
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>                
@endsection