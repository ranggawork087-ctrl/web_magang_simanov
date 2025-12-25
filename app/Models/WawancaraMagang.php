<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WawancaraMagangMagang extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_magang';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'nim',
        'asal_instansi',
        'email',
        'whatsapp',
        'prodi',
        'status',
        'tanggal_wawancara',
        'tempatwawancara',
        'selesai_wawancara',
        'durasi',
        'foto'
    ];

    protected $casts = [
        'tanggal_wawancara' => 'datetime',
    ];

    /**
     * Accessor: nama lengkap
     */
    public function getNamaLengkapAttribute()
    {
        return $this->nama_depan . ' ' . $this->nama_belakang;
    }

    /**
     * Accessor: status badge class (untuk UI)
     */
    public function getStatusClassAttribute()
    {
        return match ($this->status) {
            'lolos' => 'bg-hijau text-white',
            'tidak_lolos' => 'bg-merah-soft text-white',
            'jadwal_wawancara' => 'bg-biru-muda text-white',
            default => 'bg-yellow-400 text-black',
        };
    }
}
