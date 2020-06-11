<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
	public $table = 'rayons';
    protected $fillable = ['nama','deskripsi'];
    protected $primaryKey = 'id';    
}
