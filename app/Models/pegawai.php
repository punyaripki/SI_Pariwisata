<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
          use HasFactory;
    protected $primaryKey = 'id_pegawai';

    protected $table = 'pegawais';

    public $timestamps = false;
 public $incrementing = false;
    protected $guarded = [];
}
