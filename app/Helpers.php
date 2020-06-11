<?php
namespace App;

use Illuminate\Support\Facades\DB;
// use Models\Rayon;
// use Models\Jurusan;
// use Models\Kelas;

class Helpers {
    public static function testis() {
    	dd('testis');
    }

    public static function jurusan($id = null){
        if ($id) {
            $data = Models\Jurusan::where('id',$id)->first();
            return $data['paket_keahlian'];
            // dd($data);
        }else{
            $data = Models\Jurusan::get();
            return $data;      
        }
    }

    public static function rayon($id = null){
    	if ($id) {	
    		$data = Models\Rayon::where('id',$id)->first();
            // dd($data);
            return $data['nama'];
    	}else{
    		$data = Models\Rayon::get();
            return $data;    	
    	}
    }

    public static function kelas($id = null){
    	if ($id) {
			$data = Models\Kelas::where('id',$id)->first();
            return $data['nama'];
    	}else{
    		$data = Models\Kelas::get();
            return $data;    	
    	}
    }
}