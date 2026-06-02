<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Term;
use App\Models\User;
use App\Models\Folder;

class Bookmark extends Model
{
    use HasFactory;

    protected $table = 'bookmarks';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'id_istilah',
        'id_folder',
    ];

    public function term() { 
        return $this->belongsTo(Term::class, 'id_istilah', 'id_istilah');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function folder()
    {
        return $this->belongsTo(Folder::class, 'id_folder', 'id');
    }
}