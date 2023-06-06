<?php

namespace App\Http\Controllers;
use App\Models\hotel;
use App\Models\kamar;
use App\Models\jenishotel;
use App\Models\pemesanan;
use PDF;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(Request $request)
    {
        $pemesanan = pemesanan::all();
        $hotel = hotel::all();
        $kamar = kamar::all();
        $jenishotel = jenishotel::all();

        return view('content.crud.pemesanan', compact('pemesanan','hotel','jenishotel','kamar'));
    }

    public function store(Request $request)
    {
        $flight = pemesanan::create([
            'id_pemesanan' => $request->id_pemesanan,
            'id_hotel' => $request->id_hotel,
            'no_kamar' => $request->no_kamar,
            'id_jenis' => $request->id_jenis,
         
            'waktu_pemesanan' => $request->waktu_pemesanan,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
        ]);

        return redirect()->route('pemesanan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pemesanan = pemesanan::find($id);
        $pemesanan->update([
           'id_pemesanan' => $request->id_pemesanan,
            'id_hotel' => $request->id_hotel,
          
            'no_kamar' => $request->no_kamar,
            'id_jenis' => $request->id_jenis,
          
            'waktu_pemesanan' => $request->waktu_pemesanan,
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
        ]);

        
        return redirect()->route('pemesanan');
    }

 
    public function destroy(string $id_pemesanan)
    {
        $pemesanan = pemesanan::find($id_pemesanan);
        $pemesanan->delete();
 return redirect()->route('pemesanan');
    //   return view('content.crud.pemesanan', compact('pemesanan'));
    }
        public function exportpdf()
    {
        $data = pemesanan::all();
        $PDF = PDF::loadView('content.report.pemesanan-report', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-pemesanan.pdf');

}
}
