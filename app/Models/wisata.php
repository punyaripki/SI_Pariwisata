<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
         use HasFactory;
    protected $primaryKey = 'id_wisata';

    protected $table = 'wisatas';

    public $timestamps = false;
 public $incrementing = false;
    protected $guarded = [];
}
