<?php

namespace App\Http\Controllers;
use App\Models\pegawai;
use App\Models\hotel;
use Illuminate\Http\Request;
use PDF;

class PegawaiController extends Controller
{
        public function index(Request $request)
    {
        $pegawai = pegawai::all();
$hotel = hotel::all();
        return view('content.crud.pegawai', compact('pegawai','hotel'));
    }

    public function store(Request $request)
    {
        $flight = pegawai::create([
            'id_pegawai' => $request->id_pegawai,
            'id_hotel' => $request->id_hotel,
            'nama' => $request->nama,
             'email' => $request->email,
              'password' => $request->password,
               'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            
        ]);

        return redirect()->route('pegawai');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $pegawai = Pegawai::find($id);

    if ($pegawai) {
        $pegawai->update([
            'id_pegawai' => $request->id_pegawai,
            'id_hotel' => $request->id_hotel,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('pegawai');
    } else {
        // Handle the situation when the record is not found
        return redirect()->back()->withErrors('Record not found.');
    }
}


 
    public function destroy(string $id_pegawai)
    {
        $pegawai = pegawai::find($id_pegawai);
        $pegawai->delete();
         return redirect()->route('pegawai');

    //   return view('content.crud.pegawai', compact('pegawai'));
    }
     public function exportpdf()
    {
        $data = pegawai::all();
        $PDF = PDF::loadView('content.report.pegawai-report', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-pegawai.pdf');

}
}
