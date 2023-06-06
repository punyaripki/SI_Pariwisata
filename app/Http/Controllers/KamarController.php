<?php

namespace App\Http\Controllers;
use App\Models\kamar;
use App\Models\jeniskamar;
use App\Models\hotel;
use Illuminate\Http\Request;

class KamarController extends Controller
{
          public function index(Request $request)
    {
        $kamar = kamar::all();
        $hotel = hotel::all();
        $jeniskamar = jeniskamar::all();

        return view('content.crud.kamar', compact('kamar','hotel','jeniskamar'));
    }

    public function store(Request $request)
    {
        $flight = kamar::create([
            'no_kamar' => $request->no_kamar,
            'id_jenis' => $request->id_jenis,
            'keterangan' => $request->keterangan,
         
            
        ]);

        return redirect()->route('kamar');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kamar = kamar::find($id);
        $kamar->update([
           'no_kamar' => $request->no_kamar,
            'id_jenis' => $request->id_jenis,
            'keterangan' => $request->keterangan,
          
        ]);

        
        return redirect()->route('kamar');
    }

 
    public function destroy(string $no_kamar)
    {
        $kamar = kamar::find($no_kamar);
        $kamar->delete();
        return redirect()->route('kamar');

    //   return view('content.crud.kamar', compact('kamar'));
    }
}
