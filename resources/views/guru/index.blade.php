@extends('layouts.template')

@section('title','Index')

@section('content')
<div class="row mb-4">
    <div class="col-md-12 mb-4">
        <div class="card text-left">

            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-card alert-success" role="alert">
                    <strong class="text-capitalize">{{session('message')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                    <ul class="nav nav-tabs profile-nav mb-4" id="profileTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="guru-tab" data-toggle="tab" href="#guru" role="tab" aria-controls="guru" aria-selected="false">Tabel Guru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="guru1-tab" data-toggle="tab" href="#guru1" role="tab" aria-controls="guru1" aria-selected="true">Guru - Guru</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="profileTabContent">
                        <div class="tab-pane fade active show" id="guru" role="tabpanel" aria-labelledby="guru-tab">
                            <a target="_blank" href="{{url('guru/create')}}" class="btn btn-primary float-right mb-2 mr-3">Create</a>
                            <div class="table-responsive">
                                <table id="zero_configuration_table" class="display table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID Guru</th>
                                            <th>Nama</th>
                                            <th>e-mail</th>
                                            <th>ID Mata Pelajaran</th>
                                            <th>Status</th>
                                            <th>PJ Rayon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dataguru as $field)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $field->id }}</td>
                                            <td>{{ $field->nama }}</td>
                                            <td>{{ $field->email }}</td>
                                            <td>
                                                @if($field->id_mapel == 1)
                                                    Matematika
                                                @else
                                                    {{ $field->id_mapel }}    
                                                @endif    
                                            </td>
                                            <td>
                                                @if($field->status == 1)
                                                    Guru
                                                @else
                                                    Asisten
                                                @endif        
                                            </td>
                                            <td>{{ $field->nama_rayon }}</td>
                                            <td>
                                                <a href="{{ url('guru/edit/'.$field->id) }}" type="button" class="btn btn-success">
                                                    <i class="nav-icon i-Pen-2"></i>
                                                </a>
                                                <a href="{{ url('guru/delete/'.$field->id) }}" onclick="return confirm('Yakin?')" type="button" class="btn btn-danger">
                                                    <i class="nav-icon i-Close-Window"></i>
                                                </a>
                                                <a href="{{ url('guru/show/'.$field->id) }}" type="button" class="btn btn-warning mt-1"><i class="nav-icon i-ID-Card"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID Guru</th>
                                            <th>Nama</th>
                                            <th>e-mail</th>
                                            <th>ID Mata Pelajaran</th>
                                            <th>Status</th>
                                            <th>PJ Rayon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="guru1" role="tabpanel" aria-labelledby="guru1-tab">
                            <div class="row">
                                @foreach($dataguru as $field)
                                <div class="col-md-3">
                                    <div class="card card-profile-1 mb-4">
                                        <div class="card-body text-center">
                                            <div class="avatar box-shadow-2 mb-3">
                                                <img src="{{ asset('files/'.$field->foto) }}" alt="">
                                            </div>
                                            <h5 class="m-0">{{ $field->nama }}</h5>
                                            <p class="mt-0">
                                            @if($field->status == 1)
                                                Guru
                                            @else
                                                Asisten
                                            @endif 
                                            {{ $field->nama_mapel }} </p>
                                            <p>{{ $field->motto }}
                                            </p>
                                            <a href="{{ url('guru/show/'.$field->id) }}" class="btn btn-primary btn-rounded">Detail {!! substr($field->nama,0,7) !!}...</a>
                                            <div class="card-socials-simple mt-4">
                                                <a data-container="body" data-toggle="popover" data-placement="top" data-content="+62{{ $field->no_tlp }}">
                                                    <i class="i-Telephone-2"></i>
                                                </a>
                                                <a data-container="body" data-toggle="popover" data-placement="top" data-content="{{ $field->email }}">
                                                    <i class="i-Envelope-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                </div>        
            </div>
        </div>
    </div>
@endsection