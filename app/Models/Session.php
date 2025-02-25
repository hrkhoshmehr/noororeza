<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Verta;

class Session extends Model
{
    use HasFactory, Sluggable, SluggableScopeHelpers;

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
            return 'heyat';
        } elseif($this->type == 2) {
            return 'jahadi';
        }
    }

    public function sluggable(): array
    {

        return [
            'slug' => [
                'source' => 'fullname'
            ]
        ];
    }

    public function getFullnameAttribute(): string
    {
        $v = verta($this->date);
        $date = $v->formatWord('d F ') . $v->year;
        return $date . ' ' . $this->title;
    }

    public function getTextAttribute($value)
    {
        return nl2br(e($value), false);
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
