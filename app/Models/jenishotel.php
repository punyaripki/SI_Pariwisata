<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenishotel extends Model
{
         use HasFactory;
    protected $primaryKey = 'id_jenishotel';

    protected $table = 'jenishotels';

    public $timestamps = false;
 public $incrementing = false;
    protected $guarded = [];
}
