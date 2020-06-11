<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use DB;

class GuruController extends Controller
{
    public function index(){
    	$dataguru=DB::table('gurus')
    			->join('rayons', 'gurus.id_pj_rayon', '=', 'rayons.id')
                ->join('mata_pelajarans', 'gurus.id_mapel', '=', 'mata_pelajarans.id')
    			->select('gurus.*', 'rayons.nama as nama_rayon', 'mata_pelajarans.nama as nama_mapel')
    			->get();
    	// dd($dataguru);		
    	return view('guru.index', compact('dataguru'));
    }

    public function create(){
    	return view('guru.create');
    }

    public function save(Request $request){
    	$file = $request->file('foto');
        //dd($file);
        $new_file = $file->getClientOriginalName();
        $file->move(public_path('files'), $new_file);

    	$guru = new Guru();
	    //$surat->tgl_buat_surat = $request->tgl_buat_surat;
	    $guru->nama = $request->nama;
	    $guru->email = $request->email;
	    $guru->id_mapel = $request->id_mapel;
	    $guru->status = $request->status;
	    $guru->id_pj_rayon = $request->id_pj_rayon;
	    $guru->no_tlp = $request->no_tlp;
        $guru->motto = $request->motto;
	    $guru->foto = $new_file;

	    // dd($guru);

    	if($guru->save()){
            return redirect()->route('guru.index')->with('message','Success');
        }
    }

    public function edit($id){
    	$data=Guru::where('id',$id)->first();
    	// dd($data);
    	return view('guru.edit',compact('data'));
    }

    public function update(Request $request,$id){
    	$guru = Guru::find($id);
        // dd($surat);
        $file = $request->file('foto');
        if ($file != null) {
            $new_file = $file->getClientOriginalName();
            $file->move(public_path('files'), $new_file);
            $guru->foto = $new_file;  
        }
        // $guru->nis = $request->nis;
        $guru->nama = $request->nama;
	    $guru->email = $request->email;
	    $guru->id_mapel = $request->id_mapel;
	    $guru->status = $request->status;
	    $guru->id_pj_rayon = $request->id_pj_rayon;
	    $guru->no_tlp = $request->no_tlp;
        $guru->motto = $request->motto;

        // dd($siswa);

        $guru->save();

        return redirect()->route('guru.index')->withMessage('Data Berhasil Terupdate!');
    }

    public function delete($id){
    	$data = Guru::where('id',$id)->first();
        $data->delete();
        return back()->withMessage('Data Berhasil Terhapus');
    }

    public function show($id){
    	$dataguru=DB::table('gurus')
    			->join('rayons', 'gurus.id_pj_rayon', '=', 'rayons.id')
    			->select('gurus.*', 'rayons.nama as nama_rayon')
    			->where('gurus.id',$id)
    			->first();
    	// dd($dataguru);		
    	return view('guru.show', compact('dataguru'));		
    }

    public function download($foto){
        $path = public_path('files/'.$foto);
        return response()->download($path);
    }
}
