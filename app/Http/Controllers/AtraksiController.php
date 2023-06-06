<?php

namespace App\Http\Controllers;
use App\Models\atraksi;
use Illuminate\Http\Request;

class AtraksiController extends Controller
{
    public function index(Request $request)
    {
        $atraksi = atraksi::all();

        return view('content.crud.atraksi', compact('atraksi'));
    }

    public function store(Request $request)
    {   
        $flight = atraksi::create([
            'id_atraksi' => $request->id_atraksi,
            
            'keterangan_atraksi' => $request->keterangan_atraksi,
            
        ]);

        return redirect()->route('atraksi');
    }

      public function update(Request $request, $id)
      {
          $atraksi = atraksi::find($id);
          $atraksi->update([
          'id_atraksi' => $request->id_atraksi,
            
            'keterangan_atraksi' => $request->keterangan_atraksi,
          ]);

         return redirect()->route('atraksi-edit');
      }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_atraksi)
    {
          $atraksi = atraksi::find($id_atraksi);
        $atraksi->delete();
         return redirect()->route('atraksi');
    //  return view('content.crud.akun', compact('admin'));;
    }
}
