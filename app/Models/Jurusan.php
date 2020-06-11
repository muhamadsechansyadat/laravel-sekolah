<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
	public $table = 'jurusans';
    protected $fillable = ['paket_keahlian','deskripsi'];
    protected $primaryKey = 'id';
}
