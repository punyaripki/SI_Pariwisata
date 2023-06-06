<?php

namespace App\Http\Controllers;
use App\Models\penilaian;
use App\Models\hotel;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
       public function index(Request $request)
    {
        $hotel = hotel::all();
        $penilaian = penilaian::all();

        return view('content.crud.penilaian', compact('penilaian','hotel'));
    }

    public function store(Request $request)
    {
        $flight = penilaian::create([
            'id_penilaian' => $request->id_penilaian,
            'penilaian' => $request->penilaian,
           
            
        ]);

        return redirect()->route('penilaian');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $penilaian = penilaian::find($id);
        $penilaian->update([
           'id_penilaian' => $request->id_penilaian,
            'penilaian' => $request->penilaian,
           
        ]);

        
        return redirect()->route('penilaian');
    }

 
    public function destroy(string $id_penilaian)
    {
        $id_penilaian = penilaian::find($id_penilaian);
        $id_penilaian->delete();
        return redirect()->route('penilaian');

    //   return view('content.crud.wisata', compact('wisata'));
    }
}
