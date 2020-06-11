<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(){
    	$data = Kelas::get();
    	// dd($data);
    	return view('kelas.index',compact('data'));
    }

    public function create(){
        return view('kelas.create');
    }

    public function save(Request $request){
    	$kelas = new Kelas();

    	$kelas->nama = $request->nama;

    	if($kelas->save()) {
    		return redirect()->route('kelas.index')->with('message','Kelas baru berhasin tersimpan');
    	}
    }

    public function edit($id){
    	$data = Kelas::where('id',$id)->first();
    	return view('kelas.edit',compact('data'));
    }

    public function update(Request $request,$id){
    	$kelas = Kelas::find($id);

    	$kelas->nama = $request->nama;

    	$kelas->save();
    	return redirect()->route('kelas.index')->withMessage('Data Berhasil Terupdate!');
    }

    public function delete($id){
    	$data = Kelas::where('id',$id)->first();
    	$data->delete();
    	return back()->withMessage('Data Berhasil Terhapus');
    }
}
