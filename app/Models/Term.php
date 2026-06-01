<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table = 'terms';

    protected $primaryKey = 'id_istilah';

    protected $fillable = [
        'nama_istilah',
        'pelafalan',
        'singkatan',
        'asal_bahasa',
        'kategori_utama',
        'sub_kategori',
        'definisi',
        'penjelasan',
        'gambar',
        'id_kategori'
    ];

    public function kategori()
    {
        return $this->belongsTo(
            KategoriIstilah::class,
            'id_kategori',
            'id_kategori'
        );
    }
}