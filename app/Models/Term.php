<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table = 'terms';
    
    protected $primaryKey = 'id_istilah';

    protected $fillable = [
        'nama_istilah',
        'definisi',
        'id_kategori'
    ];

    public function kategori()
{
    return $this->belongsTo(KategoriIstilah::class, 'id_kategori');
}
}