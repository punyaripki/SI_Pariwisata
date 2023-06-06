<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenishotel;

class JenishotelController extends Controller
{
     public function index(Request $request)
    {
        $jenishotel = jenishotel::all();

        return view('content.crud.jenishotel', compact('jenishotel'));
    }

    public function store(Request $request)
    {   
        $flight = jenishotel::create([
            'id_jenishotel' => $request->id_jenishotel,
            'jumlah_bintang' => $request->jumlah_bintang,
            
        ]);

        return redirect()->route('jenishotel');
    }

      public function update(Request $request, $id)
      {
          $jenishotel = jenishotel::find($id);
          $jenishotel->update([
           'id_jenishotel' => $request->id_jenishotel,
            'jumlah_bintang' => $request->jumlah_bintang,
          ]);

         return redirect()->route('jenishotel');
      }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_jenishotel)
    {
        $jenishotel = jenishotel::find($id_jenishotel);
        $jenishotel->delete();
      return redirect()->route('jenishotel');
    }
}
