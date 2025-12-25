<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranMagang extends Model {
    use HasFactory;
    
    protected $table = 'pendaftaran_magang';

    protected $fillable = [
        'user_id',
        'peserta_id',
        'nama_depan',
        'nama_belakang',
        'email',
        'whatsapp',
        'asal_sekolah',
        'program_studi',
        'tanggal_mulai',
        'tanggal_berakhir',
        'surat_permohonan',
        'cv',
        'portofolio',
        'status',
        'tanggal_wawancara',
        'selesai_wawancara',
        'tempatwawancara'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function generatePesertaId() {
        $lastId = self::latest('id')->first();
        $number = $lastId ? intval(substr($lastId->peserta_id, 2)) + 1 : 1;
        return 'PM' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_berakhir' => 'date',
        'tanggal_wawancara' => 'datetime',
    ];
}
