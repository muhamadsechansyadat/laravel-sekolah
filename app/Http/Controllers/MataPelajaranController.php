<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;

class MataPelajaranController extends Controller
{
	public function index(){
		$data = MataPelajaran::get();
		// dd($data);
		return view('mapel.index', compact('data'));
	}

	public function create(){
		return view('mapel.create');
	}

	public function save(Request $request){
		$mapel = new MataPelajaran;

		$mapel->nama = $request->nama;
		$mapel->deskripsi = $request->deskripsi;
		// dd($mapel);

		if($mapel->save()){
			return redirect()->route('mapel.index')->with('message','Mata Pelajaran baru berhasil tersimpan');
		}
	}

	public function edit($id){
		$data = MataPelajaran::where('id',$id)->first();
		// dd($data);
		return view('mapel.edit', compact('data'));
	}

	public function update(Request $request,$id){
		$mapel = MataPelajaran::find($id);

		$mapel->nama = $request->nama;
		$mapel->deskripsi = $request->deskripsi;

		// dd($mapel);

		$mapel->save();

		return redirect()->route('mapel.index')->with('message','Data Berhasil Terupdate');
	}

	public function delete($id){
		$data = MataPelajaran::where('id',$id)->first();
		$data->delete();
		return back()->withMessage('Data berhasil terhapus');
	}
}
