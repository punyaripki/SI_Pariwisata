<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
       use HasFactory;
    protected $primaryKey = 'no_kamar';

    protected $table = 'kamars';

    public $timestamps = false;
 public $incrementing = false;
    protected $guarded = [];
}
