<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'id_user',
        'id_istilah'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function term()
    {
        return $this->belongsTo(Term::class, 'id_istilah', 'id_istilah');
    }
}