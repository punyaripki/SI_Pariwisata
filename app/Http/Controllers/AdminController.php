<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\pemesanan;
use App\Models\pegawai;
use App\Models\penilaian;
use App\Models\wisata;
use PDF;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $admin = admin::all();
        $pemesanan = pemesanan::all();
        $pegawai = pegawai::all();
        $penilaian = penilaian::all();
        $wisata = wisata::all();

        return view('content.crud.admin', compact('admin','pemesanan','pegawai','penilaian','wisata'));
    }

    public function store(Request $request)
    {   
        $flight = admin::create([
            'id_admin' => $request->id_admin,
            'id_pemesanan' => $request->id_pemesanan,
            'id_pegawai' => $request->id_pegawai,
            'id_penilaian' => $request->id_penilaian,
            'id_wisata' => $request->id_wisata,
            
            'nama_admin' => $request->nama_admin,
            'email_admin' => $request->email_admin,
            'password_admin' => $request->password_admin,
        ]);

        return redirect()->route('admin');
    }

      public function update(Request $request, $id)
      {
          $admin = admin::find($id);
          $admin->update([
              'id_admin' => $request->id_admin,
              'id_pemesanan' => $request->id_pemesanan,
              'id_pegawai' => $request->id_pegawai,
              'id_penilaian' => $request->id_penilaian,
              'id_wisata' => $request->id_wisata,
             
              'nama_admin' => $request->nama_admin,
              'email_admin' => $request->email_admin,
              'password_admin' => $request->password_admin,
          ]);

         return redirect()->route('admin');
      }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_admin) 
    {
        $admin = admin::find($id_admin);
        $admin->delete();
         return redirect()->route('admin');
    //  return view('content.crud.akun', compact('admin'));
    }
       public function exportpdf()
    {
        $data = admin::all();
        $PDF = PDF::loadView('content.report.admin-report', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-admin.pdf');

}
}
