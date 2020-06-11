@extends('layouts.template')

@section('title','Show')

@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Show {{ $datasiswa->nama }}</div>
					<div class="row">
                        <div class="col-md-4 col-6">
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-ID-Card text-16 mr-1"></i> NIS</p>
                                <span>{{ $datasiswa->nis }}</span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-ID-Card text-16 mr-1"></i> Nama</p>
                                <span>{{ $datasiswa->nama }}</span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-MaleFemale text-16 mr-1"></i> Jenis Kelamin</p>
                                <span>
                                	@if($datasiswa->kelamin == 1)
										Laki-Laki
									@else
										Perempuan
									@endif		
                                </span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-MaleFemale text-16 mr-1"></i> Agama</p>
                                <span>
                                	@if($datasiswa->agama == 'islam')
                                		Islam
                                	@elseif($datasiswa->agama == 'protestan')
                                		Protestan
                                	@elseif($datasiswa->agama == 'katolik')
                                		Katolik
                                	@elseif($datasiswa->agama == 'hindu')
                                		Hindu
                                	@elseif($datasiswa->agama == 'budha')
                                		Bhuda
                                	@else
                                		Kong Hu Chu
                                	@endif						
                                </span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Globe text-16 mr-1"></i> Tempat Lahir</p>
                                <span>{{ $datasiswa->tempat_lahir }}</span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Calendar text-16 mr-1"></i> Tanggal Lahir</p>
                                <span>{!! substr($datasiswa->tanggal_lahir,0,10) !!}</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Globe text-16 mr-1"></i> Alamat</p>
                                <span>{{ $datasiswa->alamat }}</span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Telephone text-16 mr-1"></i> NO Telepon</p>
                                <span>+62{{ $datasiswa->no_tlp }}</span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Face-Style-4 text-16 mr-1"></i> Rayon</p>
                                <span>
                                    {{ Helper::rayon($datasiswa->id_rayon) }}        
                                </span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Professor text-16 mr-1"></i> Jurusan</p>
                                <span>
                                    {{ Helper::jurusan($datasiswa->id_jurusan) }}
                                </span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Home1 text-16 mr-1"></i> Kelas</p>
                                <span>{{ Helper::kelas($datasiswa->id_kelas) }}                  
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Camera text-16 mr-1"></i> Foto</p>
                                <div class="col-md-12">
                                    <div class="img-container o-hidden">
                                        <img class="cropper-main-img img-fluid" src="{{asset('files/'.$datasiswa->foto)}}" alt="Picture">
                                    </div>
                                </div>
                                <a href="{{url('siswa/download'.'/'.$datasiswa->foto)}}" class="btn btn-primary float-left mb-2 mr-3 mt-2"><i class="i-Data-Download"></i> Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                
@endsection