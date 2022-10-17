<?php

namespace App\Http\Controllers\Siasik;

use App\Http\Controllers\Controller;
use App\Models\Siasik\KontrakPekerjaan as SiasikKontrakPekerjaan;
use Illuminate\Http\Request;

class KontrakPekerjaan extends Controller
{
    //
    public function kontrakPekerjaan()
    {
        //tampilkan semua
        //$data = SiasikKontrakPekerjaan::all();

        //order by
        //$data = SiasikKontrakPekerjaan::latest('id')->get();

        //membuat halaman
        //$data = SiasikKontrakPekerjaan::latest('id')->paginate('2');

        $data = SiasikKontrakPekerjaan::where('nokontrak', request('nota'))->first();
        return response()->json($data);
    }
}
