<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerakan extends Model
{
    protected $table = 'gerakan';
    protected $fillable = [
        'kategori_id',
        'nama',
        'slug',
        'urutan',
        'gambar',
        'video',
        'deskripsi'
    ];

    public function kategori()
    {
        return $this->belongsTo((Kategori::class));
    }

    public function bacaan()
    {
        return $this->hasOne(Bacaan::class);
    }
}
