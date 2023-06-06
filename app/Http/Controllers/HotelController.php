<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use App\Models\kamar;
use App\Models\penilaian;
use App\Models\jenishotel;
use PDF;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request)
    {
$kamar = kamar::all();
$penilaian = penilaian::all();
$jenishotel = jenishotel::all();
        $hotel = hotel::all();

        return view('content.crud.hotel', compact('hotel','kamar','penilaian','jenishotel'));
    }

    public function store(Request $request)
    {
        $flight = hotel::create([
            'id_hotel' => $request->id_hotel,
            'id_penilaian' => $request->id_penilaian,
            'id_jenishotel' => $request->id_jenishotel,
            'nama_hotel' => $request->nama_hotel,
            'alamat_hotel' => $request->alamat_hotel,
            'no_hp' => $request->no_hp,
            'banyak_kamar' => $request->banyak_kamar,
            'no_kamar' => $request->no_kamar,
        ]);

        return redirect()->route('hotel');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hotel = hotel::find($id);
        $hotel->update(
            [
            'id_hotel' => $request->id_hotel,
            'id_penilaian' => $request->id_penilaian,
           'id_jenishotel' => $request->id_jenishotel,
            'nama_hotel' => $request->nama_hotel,
            'alamat_hotel' => $request->alamat_hotel,
            'no_hp' => $request->no_hp,
            'banyak_kamar' => $request->banyak_kamar,
            'no_kamar' => $request->no_kamar,
        ]
    );

        return redirect()->route('hotel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_hotel)
    {
         $hotel = hotel::find($id_hotel);
        // hotel::destroy($hotel->id_hotel);
        $hotel->delete();
       
       
         return redirect()->route('hotel');
        // $hotel->each->delete();

        //  return view('content.crud.hotel', compact('hotel'));
    }

    public function exportpdf()
    {
        $data = hotel::all();
        $PDF = PDF::loadView('content.report.hotel-report', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-hotel.pdf');

}
}
