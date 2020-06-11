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
                <a href="{{url('siswa/autocode')}}" class="btn btn-primary float-right mb-2 mr-3">Create</a>
                <div class="table-responsive">
                    <table id="zero_configuration_table" class="display table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelamin</th>
                                <th>Rayon</th>
                                <th>Paket Keahlian</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datasiswa as $field)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $field->nis }}</td>
                                <td>{{ $field->nama }}</td>
                                <td>@if($field->kelamin == 1)
                                        Laki - Laki
                                    @else
                                        Perempuan
                                    @endif
                                </td>
                                <td>{{ $field->nama_rayon }}</td>
                                <td>{{ $field->paket_keahlian }}</td>
                                <td>{{ $field->nama_kelas }}</td>
                                <td>
                                    <a href="{{ url('siswa/edit/'.$field->id) }}" type="button" class="btn btn-success">
                                        <i class="nav-icon i-Pen-2"></i>
                                    </a>
                                    <a href="{{ url('siswa/delete/'.$field->id) }}" onclick="return confirm('Yakin?')" type="button" class="btn btn-danger">
                                        <i class="nav-icon i-Close-Window"></i>
                                    </a>
                                    <a href="{{ url('siswa/show/'.$field->id) }}" type="button" class="btn btn-warning"><i class="nav-icon i-ID-Card"></i></a>
                                </td>
                            </tr>
                            @endforeach
						<tfoot>
                            <tr>
                                <th>NO</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelamin</th>
                                <th>Rayon</th>
                                <th>Paket Keahlian</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!-- <div class="modal fade" id="verifyModalContent" tabindex="-1" role="dialog" aria-labelledby="verifyModalContent" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Input Data Siswa</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                content
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
@endsection