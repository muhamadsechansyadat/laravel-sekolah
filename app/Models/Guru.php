<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    public $table = 'gurus';
    protected $fillable = ['nama','email','id_mapel','status','id_pj_rayon','foto','no_tlp'];
    protected $primaryKey = 'id';
}
