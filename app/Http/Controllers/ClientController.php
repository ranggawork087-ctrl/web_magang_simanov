<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranMagang;
use Illuminate\Http\Request;

class ClientController extends Controller {
    public function dashboard() {
        $id = auth()->user()->id;
        $pendaftaran = PendaftaranMagang::where('user_id', auth()->id())->first();
        $status = $pendaftaran->status;

        switch ($status) {
            case 'validasi_data':
                return view('client.ds_tahapvalidasidata', compact('pendaftaran'));
            case 'jadwal_wawancara':
                return view('client.ds_tahapjadwalwawancara', compact('pendaftaran'));
            case 'selesai_wawancara':
                return view('client.ds_tahapsetelahwawancara', compact('pendaftaran'));
            case 'lolos':
                return view('client.ds_tahaplolos', compact('pendaftaran'));
            case 'tidak_lolos':
                return view('client.ds_tahaptidaklolos', compact('pendaftaran'));
            default:
                return view('client.ds_tahapvalidasidata', compact('pendaftaran'));
        }
            if ($wawancara->status === 'Selesai Wawancara') {
        return view('ds_tahapsetelahwawancara');
    }
    }
}
