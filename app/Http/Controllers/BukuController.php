<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use DB;

class BukuController extends Controller
{
    public function index(){
    	$databuku = DB::table('bukus')
    			->join('stoks', 'bukus.id', '=', 'stoks.id_buku')
    			->select('bukus.*')
    			->where('stoks.stok', '>=', 0)
    			->get();
    	// dd($databuku);
    			// print_r($databuku);
    	return view('buku.index', compact('databuku'));		
    }

    public function create(){
    	$dropbuku = DB::table('bukus')
    			->join('stoks', 'bukus.id', '=', 'stoks.id_buku')
    			->select('bukus.*')
    			->where('bukus.id', '!=', 'stoks.id_buku')
    			->get();
    	dd($dropbuku);
    	return view('buku.create', compact('dropbuku'));		
    }
}
