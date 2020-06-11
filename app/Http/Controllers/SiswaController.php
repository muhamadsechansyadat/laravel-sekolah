<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use DB;

class SiswaController extends Controller
{
    public function index(){
    	// $datasiswa=Siswa::get();
        $datasiswa = DB::table('siswas')
                ->join('jurusans', 'siswas.id_jurusan', '=', 'jurusans.id')
                ->join('rayons', 'siswas.id_rayon', '=', 'rayons.id')
                ->join('kelas', 'siswas.id_kelas', '=', 'kelas.id')
                ->select('siswas.*','jurusans.paket_keahlian','rayons.nama as nama_rayon','kelas.nama as nama_kelas')
                ->get();
        //dd($jurusan);        
        return view('siswa.index',compact('datasiswa'));
    }

    public function autocode(){
    	$n = DB::table('siswas')->select('id')->max('id');
    	$id = sprintf("%04s", $n+1);
    	$nis = '1160'.$id;
    	//dd($nis);
    	return view('siswa.create',[
     		'nis' => $nis
    	]);
    }

    public function save(Request $request){
    	$file = $request->file('foto');
        //dd($file);
        $new_file = $file->getClientOriginalName();
        $file->move(public_path('files'), $new_file);

    	$siswa = new Siswa();
	    //$surat->tgl_buat_surat = $request->tgl_buat_surat;
	    $siswa->nis = $request->nis;
	    $siswa->nama = $request->nama;
	    $siswa->kelamin = $request->kelamin;
	    $siswa->agama = $request->agama;
	    $siswa->tempat_lahir = $request->tempat_lahir;
	    $siswa->tanggal_lahir = $request->tanggal_lahir;
	    $siswa->alamat = $request->alamat;
	    $siswa->no_tlp = $request->no_tlp;
	    $siswa->id_rayon = $request->id_rayon;
	    $siswa->id_jurusan = $request->id_jurusan;
	    $siswa->id_kelas = $request->id_kelas;
	    $siswa->foto = $new_file;

    	if($siswa->save()){
            return redirect('siswa/autocode')->with('message','Success');
        }
    }

    public function edit($id){
        $data = Siswa::where('id',$id)->first();
        return view('siswa.edit', compact('data'));
    }

    public function update(Request $request,$id){
        $siswa = Siswa::find($id);
        // dd($surat);
        $file = $request->file('foto');
        if ($file != null) {
            $new_file = $file->getClientOriginalName();
            $file->move(public_path('files'), $new_file);
            $siswa->foto = $new_file;  
        }
        // $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelamin = $request->kelamin;
        $siswa->agama = $request->agama;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat = $request->alamat;
        $siswa->no_tlp = $request->no_tlp;
        $siswa->id_rayon = $request->id_rayon;
        $siswa->id_jurusan = $request->id_jurusan;
        $siswa->id_kelas = $request->id_kelas;

        // dd($siswa);

        $siswa->save();

        return redirect()->route('siswa.index')->withMessage('Data Berhasil Terupdate!');
    }

    public function delete($id){
        $data = Siswa::where('id',$id)->first();
        $data->delete();
        return back()->withMessage('Data Berhasil Terhapus');
    }

    public function show($id){
        // $data = Siswa::where('id',$id)->first();
        $datasiswa = DB::table('siswas')
                ->join('jurusans', 'siswas.id_jurusan', '=', 'jurusans.id')
                ->join('rayons', 'siswas.id_rayon', '=', 'rayons.id')
                ->join('kelas', 'siswas.id_kelas', '=', 'kelas.id')
                ->select('siswas.*','jurusans.paket_keahlian','rayons.nama as nama_rayon','kelas.nama as nama_kelas')
                ->where('siswas.id',$id)
                ->first();
        // dd($datasiswa);        
        return view('siswa.show', compact('datasiswa'));
    }

    public function download($foto){
        $path = public_path('files/'.$foto);
        return response()->download($path);
    }
}
