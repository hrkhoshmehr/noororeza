<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'status'
    ];

    public function getStatus()
    {
        if($this->status == 1) {
            return 'فعال';
        } else {
            return 'غیر فعال';
        }

    }
}
