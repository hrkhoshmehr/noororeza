<?php

namespace App\Models\User;

use Verta;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Session extends Model
{
    use HasFactory, Sluggable, SluggableScopeHelpers;


    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }

    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }

    public function sounds()
    {
        return $this->hasMany('App\Models\Sound');
    }

    public function videos()
    {
        return $this->hasMany('App\Models\Video');
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
        $v = verta($this->date);
        return [
            'slug' => [
                'source' => ['title', $v->formatWord('d F ') . $v->year],
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }


    protected $fillable=[
        'title',
        'description',
        'event_id',
        'type',
        'cover',
        'notification',
        'date',
        'slug',
    ];
}
