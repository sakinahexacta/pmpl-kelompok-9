<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriIstilah extends Model
{
    protected $primaryKey = 'id_kategori';

    protected $fillable = ['nama_kategori'];

    public function terms()
    {
        return $this->hasMany(Term::class, 'id_kategori');
    }
}