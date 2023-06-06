<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
     use HasFactory;
    protected $primaryKey = 'id_pemesanan';
    protected $table = 'pemesanans';
    public $timestamps = false;
 public $incrementing = false;
    protected $guarded = [];
}
