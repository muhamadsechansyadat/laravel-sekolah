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
                <a href="{{url('buku/create')}}" class="btn btn-primary float-right mb-2 mr-3">Create</a>
                <div class="table-responsive">
                    <table id="zero_configuration_table" class="display table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ID Buku</th>
                                <th>Judul Buku</th>
                                <th>Penerbit</th>
                                <th>Pengarang</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($databuku as $field)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $field->id }}</td>
                                <td>{{ $field->judul_buku }}</td>
                                <td>{{ $field->penerbit }}</td>
                                <td>{{ $field->pengarang }}</td>
                                <!--  -->
                                <td>
                                    <a href="{{ url('buku/edit/'.$field->id) }}" type="button" class="btn btn-success">
                                        <i class="nav-icon i-Pen-2"></i>
                                    </a>
                                    <a href="{{ url('buku/delete/'.$field->id) }}" onclick="return confirm('Yakin?')" type="button" class="btn btn-danger">
                                        <i class="nav-icon i-Close-Window"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
						<tfoot>
                            <tr>
                                <th>NO</th>
                                <th>ID Buku</th>
                                <th>Judul Buku</th>
                                <th>Penerbit</th>
                                <th>Pengarang</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection