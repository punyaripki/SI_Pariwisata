<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;

class Kamar extends Controller
{
    public function index()
    {
        return view('content.crud.kamar');
    }
}
