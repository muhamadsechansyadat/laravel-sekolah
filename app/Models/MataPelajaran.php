<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    public $table = 'mata_pelajarans';
    protected $fillable = ['nama','deskripsi'];
    protected $primaryKey = 'id';
}
