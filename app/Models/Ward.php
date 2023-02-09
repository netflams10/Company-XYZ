<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at', ];

    // protected $with = ['lga'];

    // public function lga ()
    // {
    //     return $this->hasOne(LGA::class);
    // }
}
