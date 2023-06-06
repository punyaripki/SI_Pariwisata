<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian extends Model
{
        use HasFactory;
    protected $primaryKey = 'id_penilaian';

    protected $table = 'penilaians';

    public $timestamps = false;
 public $incrementing = false;
    protected $guarded = [];
}
