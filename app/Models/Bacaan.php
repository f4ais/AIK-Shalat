<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bacaan extends Model
{
    protected $table = 'bacaan';
    protected $fillable = [
        'gerakan_id',
        'arab',
        'latin',
        'terjemahan',
        'audio'
    ];

    public function gerakan()
    {
        return $this->belongsTo(Gerakan::class);
    }
}
