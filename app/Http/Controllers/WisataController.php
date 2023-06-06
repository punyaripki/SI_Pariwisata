<?php

namespace App\Http\Controllers;
use App\Models\wisata;
use App\Models\atraksi;
use PDF;
use Illuminate\Http\Request;

class WisataController extends Controller
{
       public function index(Request $request)
    {
        $atraksi = atraksi::all();
        $wisata = wisata::all();

        return view('content.crud.wisata', compact('wisata','atraksi'));
    }

    public function store(Request $request)
    {
        $flight = wisata::create([
            'id_wisata' => $request->id_wisata,
            'id_atraksi' => $request->id_wisata,
            'objek_wisata' => $request->objek_wisata,
            'keterangan' => $request->keterangan,
            
            
        ]);

        return redirect()->route('wisata');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $wisata = wisata::find($id);
        $wisata->update([
             'id_wisata' => $request->id_wisata,
            'objek_wisata' => $request->objek_wisata,
            'keterangan' => $request->keterangan,
            
        ]);

        
        return redirect()->route('wisata');
    }

 
    public function destroy(string $id_wisata)
    {
        $wisata = wisata::find($id_wisata);
        $wisata->delete();
return redirect()->route('wisata');
    //   return view('content.crud.wisata', compact('wisata'));
    }
      public function exportpdf()
    {
        $data = wisata::all();
        $PDF = PDF::loadView('content.report.wisata-report', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-wisata.pdf');

}
}
