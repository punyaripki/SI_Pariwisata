<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_hotel';

    protected $table = 'hotels';

    public $timestamps = false;
     public $incrementing = false;

    protected $guarded = [];
}
