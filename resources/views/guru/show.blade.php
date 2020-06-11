@extends('layouts.template')

@section('title','Show')

@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title">Show {{ $dataguru->nama }}</div>
					<div class="row">
                        <div class="col-md-4 col-6">
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-ID-Card text-16 mr-1"></i>ID Guru</p>
                                <span>{{ $dataguru->id }}</span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-ID-Card text-16 mr-1"></i> Nama</p>
                                <span>{{ $dataguru->nama }}</span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Globe text-16 mr-1"></i> e-mail</p>
                                <span>{{ $dataguru->email }}</span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Book text-16 mr-1"></i> ID Mata Pelajaran</p>
                                <span>
                                	@if($dataguru->id_mapel == 1)
                                		Matematika
                                	@endif						
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-MaleFemale text-16 mr-1"></i>Status</p>
                                <span>
                                    @if($dataguru->status == 1)
                                        Guru
                                    @else
                                        Asisten
                                    @endif        
                                </span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Calendar text-16 mr-1"></i>Penanggung Jawab Rayon</p>
                                <span>{{ Helper::rayon($dataguru->id_pj_rayon) }}</span>
                            </div>
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Telephone text-16 mr-1"></i> NO Telepon</p>
                                <span>+62{{ $dataguru->no_tlp }}</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="mb-4">
                                <p class="text-primary mb-1"><i class="i-Camera text-16 mr-1"></i> Foto</p>
                                <div class="col-md-12">
                                    <div class="img-container o-hidden">
                                        <img class="cropper-main-img img-fluid" src="{{asset('files/'.$dataguru->foto)}}" alt="Picture">
                                    </div>
                                </div>
                                <a href="{{url('guru/download'.'/'.$dataguru->foto)}}" class="btn btn-primary float-left mb-2 mr-3 mt-2"><i class="i-Data-Download"></i> Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                
@endsection