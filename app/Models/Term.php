<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $primaryKey = 'id_istilah';

    protected $fillable = [
        'nama_istilah',
        'definisi',
        'id_kategori'
    ];
}