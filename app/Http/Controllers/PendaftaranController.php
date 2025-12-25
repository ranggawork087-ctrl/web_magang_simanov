<?php

use App\Models\PendaftaranMagang;

class PendaftaranController extends PendaftaranController {
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
}