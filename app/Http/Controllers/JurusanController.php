<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index(){
    	$data = Jurusan::get();
    	return view('jurusan.index', compact('data'));
    }

    public function create(){
        return view('jurusan.create');
    }

    public function save(Request $request){
    	$jurusan = new Jurusan();

    	$jurusan->paket_keahlian = $request->paket_keahlian;
    	$jurusan->deskripsi = $request->deskripsi;

    	if($jurusan->save()){
            return redirect()->route('jurusan.index')->with('message','Jurusan baru berhasin tersimpan');
        }
    }

    public function edit($id){
        $data = Jurusan::where('id',$id)->first();
        return view('jurusan.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $jurusan = Jurusan::find($id);

        $jurusan->paket_keahlian = $request->paket_keahlian;
        $jurusan->deskripsi = $request->deskripsi;

        $jurusan->save();

        return redirect()->route('jurusan.index')->withMessage('Data Berhasil Terupdate!');
    }

    public function delete($id){
        $data = Jurusan::where('id',$id)->first();
        $data->delete();
        return back()->withMessage('Data Berhasil Terhapus');
    }
}
