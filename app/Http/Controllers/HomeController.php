<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PendaftaranMagang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        return view('home');
    }

    public function showForm() {
        return view('form');
    }

    public function submitForm(Request $request) {
        $validated = $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'whatsapp' => 'required|regex:/^\+?62\d{8,15}$/',
            'asal_sekolah' => 'required|string|max:255',
            'program_studi' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
            'surat_permohonan' => 'required|mimes:pdf|max:10240',
            'cv' => 'required|mimes:pdf|max:10240',
            'portofolio' => 'required|mimes:pdf|max:51200',
        ]);

        $existing = PendaftaranMagang::where('email', $request->email)->first();
        
        if (!$existing) {
            $user = User::create([
                'name' => $request->nama_depan . ' ' . $request->nama_belakang,
                'email' => $request->email,
                'password' => bcrypt('user123'),
            ]);

            $pesertaId = 'PES-' . time();

            $suratPath = $request->file('surat_permohonan')->store('surat_permohonan', 'public');
            $cvPath = $request->file('cv')->store('cv', 'public');
            $portofolioPath = $request->file('portofolio')->store('portofolio', 'public');

            PendaftaranMagang::create([
                'user_id' => $user->id,
                'peserta_id' => $pesertaId,
                'nama_depan' => $validated['nama_depan'],
                'nama_belakang' => $validated['nama_belakang'],
                'email' => $validated['email'],
                'whatsapp' => $validated['whatsapp'],
                'asal_sekolah' => $validated['asal_sekolah'],
                'program_studi' => $validated['program_studi'],
                'tanggal_mulai' => $validated['tanggal_mulai'],
                'tanggal_berakhir' => $validated['tanggal_berakhir'],
                'surat_permohonan' => $suratPath,
                'cv' => $cvPath,
                'portofolio' => $portofolioPath,
                'status' => 'validasi_data',
            ]);
        }

        return redirect()->route('view.home');
    }
}
