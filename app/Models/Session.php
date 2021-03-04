<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function sounds()
    {
        return $this->hasMany(Sound::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function getType() {
        if($this->type == 1) {
            return 'هیئت';
        } elseif($this->type == 2) {
            return 'جهادی';
        }
    }

    protected $fillable=[
        'title',
        'description',
        'event_id',
        'type',
        'cover',
        'notification',
        'date',
    ];
}
