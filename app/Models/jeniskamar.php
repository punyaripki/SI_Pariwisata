<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jeniskamar extends Model
{
            use HasFactory;
    protected $primaryKey = 'id_jeniskamar';

    protected $table = 'jeniskamars';

    public $timestamps = false;
 public $incrementing = false;
    protected $guarded = [];
}
