<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;

class Hotel extends Controller
{
    public function index()
    {
        return view('content.crud.Hotel');
    }
}
