<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\PendaftaranMagang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $pendaftaran = PendaftaranMagang::orderBy('created_at', 'desc')->get();

        return view('admin.pendaftaran', compact('pendaftaran'));
    }

    public function dashboard()
    {
        $totalpendaftar = DB::table('pendaftaran_magang')->count();
        $totalditerima = DB::table('pendaftaran_magang')
            ->where('status', 'lolos')
            ->count();
        $totalditolak = DB::table('pendaftaran_magang')
            ->where('status', 'tidak_lolos')
            ->count();
        $totalwawancara = DB::table('pendaftaran_magang')
            ->where('status', 'jadwal_wawancara')
            ->count();
        $wawancarahariini = DB::table('pendaftaran_magang')
            ->whereDate('tanggal_wawancara', today())
            ->where('status', 'jadwal_wawancara')
            ->get();

        return view('admin.dashboard', compact('totalpendaftar', 'totalditerima', 'totalditolak', 'totalwawancara', 'wawancarahariini'));
    }

    public function kelolapendaftaran()
    {
        $kelolapendaftaran = PendaftaranMagang::orderBy('created_at', 'desc')->get();

        return view('admin.kelolapendaftaran', compact('kelolapendaftaran'));
    }



    public function show($id)
    {
        $pendaftaran = PendaftaranMagang::findOrFail($id);

        return view('admin.detailpendaftaran', compact('pendaftaran'));
    }

    public function updateStatus(Request $request, $id)
    {
        $pendaftaran = PendaftaranMagang::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:validasi_data,jadwal_wawancara,selesai_wawancara,lolos,tidak_lolos',
            'tanggal_wawancara' => 'nullable|date',
            'tempatwawancara' => 'nullable|string',
            'pewawancara' => 'nullable|string',
        ]);

        $pendaftaran->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Status berhasil diupdate'
        ]);
    }

    public function terima($id)
    {
        PendaftaranMagang::where('id', $id)->update([
            'status' => 'lolos'
        ]);

        return response()->json([
            'success' => true,
            'status' => 'lolos',
            'status_text' => 'Diterima'
        ]);
    }

    public function tolak($id)
    {
        PendaftaranMagang::where('id', $id)->update([
            'status' => 'tidak_lolos'
        ]);

        return response()->json([
            'success' => true,
            'status' => 'tidak_lolos',
            'status_text' => 'Ditolak'
        ]);
    }

    public function datawawancara()
    {
        // Data yang sudah punya jadwal wawancara
        $wawancara = PendaftaranMagang::where('status', 'jadwal_wawancara')
            ->orderBy('tanggal_wawancara', 'asc')
            ->get();

        // Dropdown: SEMUA kecuali yang sudah diterima (lolos&tidak lolos)
        $pendaftar = PendaftaranMagang::whereIn('status', ['validasi_data'])
            ->orderBy('nama_depan')
            ->get();

        return view('admin.datawawancara', compact('wawancara', 'pendaftar'));
    }


    public function simpanWawancara(Request $request)
    {
        $request->validate([
            'id_pendaftar' => 'required|exists:pendaftaran_magang,id',
            'tanggal_wawancara' => 'required|date',
            'tempat_wawancara' => 'required|string',
        ]);

        // Ambil SATU pendaftar berdasarkan ID
        $pendaftar = PendaftaranMagang::findOrFail($request->id_pendaftar);

        // Cegah update kalau sudah diterima
        if (in_array($pendaftar->status, ['lolos', 'tidak_lolos'])) {
            return redirect()->back()
                ->with('error', 'Pendaftar sudah memiliki status final.');
        }

        // Update data wawancara
        $pendaftar->update([
            'tanggal_wawancara' => $request->tanggal_wawancara,
            'tempatwawancara' => $request->tempat_wawancara,
            'status' => 'jadwal_wawancara',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Jadwal wawancara berhasil disimpan'
        ]);
    }

    public function selesai($id)
    {
        try {
            $wawancara = PendaftaranMagang::findOrFail($id);

            $wawancara->update([
                'status' => 'selesai_wawancara'
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Status wawancara berhasil diperbarui'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal memperbarui status'
            ], 500);
        }
    }

    public function hapusWawancara($id)
    {
        $data = PendaftaranMagang::findOrFail($id);

        $data->update([
            'tanggal_wawancara' => null,
            'tempatwawancara' => null,
            'status' => 'validasi_data'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data wawancara dihapus'
        ]);
    }

    public function showFile($id, $type)
    {
        $data = PendaftaranMagang::findOrFail($id);

        $map = [
            'cv'         => $data->cv,
            'surat'      => $data->surat_permohonan,
            'portofolio' => $data->portofolio,
        ];

        if (!isset($map[$type])) {
            abort(404);
        }

        $file = $map[$type];

        if (!$file) {
            abort(404, 'File tidak tersedia');
        }

        if (!Storage::disk('public')->exists($file)) {
            abort(404, 'File tidak ditemukan');
        }

        return response()->file(
            Storage::disk('public')->path($file),
            ['Content-Type' => 'application/pdf']
        );
    }
}
