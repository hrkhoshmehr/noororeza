<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function getType()
    {
        if($this->type == 1) {
            return 'محرم';
        }
        if($this->type == 2) {
            return 'جهادی';
        }
        if($this->type == 3) {
            return 'فاطمیه';
        }
    }

    protected $fillable=[
        'title',
        'type',
    ];
}
