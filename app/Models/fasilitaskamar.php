<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitaskamar extends Model
{
            use HasFactory;
    protected $primaryKey = 'id_fasilitaskamar';

    protected $table = 'fasilitaskamars';

    public $timestamps = false;
     public $incrementing = false;

    protected $guarded = [];
}
