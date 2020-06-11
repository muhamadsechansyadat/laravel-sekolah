<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $table = 'kelas';
    protected $fillable = ['nama','deskripsi'];
    protected $primaryKey = 'id'; 
}
