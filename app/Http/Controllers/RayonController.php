<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rayon;

class RayonController extends Controller
{
    public function index(){
    	$data = Rayon::get();
    	return view('rayon.index',compact('data'));
    }

    public function create(){
        return view('rayon.create');
    }

    public function save(Request $request){
    	$rayon = new Rayon();

    	$rayon->nama = $request->nama;
    	$rayon->deskripsi = $request->deskripsi;

    	if($rayon->save()){
            return redirect()->route('rayon.index')->with('message','Rayon baru berhasin tersimpan');
        }
    }

    public function edit($id){
    	$data = Rayon::where('id',$id)->first();
        return view('rayon.edit', compact('data'));
    }

    public function update(Request $request,$id){
    	$rayon = Rayon::find($id);

        $rayon->nama = $request->nama;
        $rayon->deskripsi = $request->deskripsi;

        $rayon->save();

        return redirect()->route('rayon.index')->withMessage('Data Berhasil Terupdate!');
    }

    public function delete($id){
    	$data = Rayon::where('id',$id)->first();
        $data->delete();
        return back()->withMessage('Data Berhasil Terhapus');
    }
}
