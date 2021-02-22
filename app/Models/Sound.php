<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    use HasFactory;

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    protected $fillable=[
        'title',
        'description',
        'session_id',
        'path',
    ];
}
