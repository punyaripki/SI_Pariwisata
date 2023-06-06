<?php

namespace App\Http\Controllers;
use App\Models\jeniskamar;
use Illuminate\Http\Request;

class JeniskamarController extends Controller
{
      public function index(Request $request)
    {
        $jeniskamar = jeniskamar::all();

        return view('content.crud.jeniskamar', compact('jeniskamar'));
    }

    public function store(Request $request)
    {   
        $flight = jeniskamar::create([
            'id_jeniskamar' => $request->id_jeniskamar,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
            'nama_jeniskamar' => $request->nama_jeniskamar,
            
        ]);

        return redirect()->route('jeniskamar');
    }

      public function update(Request $request, $id)
      {
          $jeniskamar = jeniskamar::find($id);
          $jeniskamar->update([
          'id_jeniskamar' => $request->id_jeniskamar,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
            'nama_jeniskamar' => $request->nama_jeniskamar,
          ]);

         return redirect()->route('jeniskamar');
      }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_jeniskamar)
    {
        $jeniskamar = jeniskamar::find($id_jeniskamar);
        $jeniskamar->delete();
      return redirect()->route('jeniskamar');
    }
}
