<?php

namespace App\Http\Controllers;
use App\Models\fasilitaskamar;
use Illuminate\Http\Request;

class FasilitaskamarController extends Controller
{
     public function index(Request $request)
    {
        $fasilitaskamar = fasilitaskamar::all();

        return view('content.crud.fasilitaskamar', compact('fasilitaskamar'));
    }

    public function store(Request $request)
    {
        $flight = fasilitaskamar::create([
            'id_fasilitaskamar' => $request->id_fasilitaskamar,
            'keterangan_fasilitas' => $request->keterangan_fasilitas,
            
        ]);

        return redirect()->route('fasilitaskamar');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fasilitaskamar = fasilitaskamar::find($id);
        $fasilitaskamar->update([
           'id_fasilitaskamar' => $request->id_fasilitaskamar,
            'keterangan_fasilitas' => $request->keterangan_fasilitas,
        ]);

        return redirect()->route('fasilitaskamar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_fasilitaskamar)
    {
        $fasilitaskamar = fasilitaskamar::find($id_fasilitaskamar);
        $fasilitaskamar->delete();
        return redirect()->route('fasilitaskamar');

        //  return view('content.crud.hotel', compact('hotel'));
    }
}
