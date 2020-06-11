<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $table = 'siswas';
    protected $fillable = ['nis','nama','kelamin','agama','tempat_lahir','tanggal_lahir','alamat','no_tlp','rayon','jurusan','kelas'];
    protected $primaryKey = 'id';
}
