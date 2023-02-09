<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $hidden = ['ward_id'];

    // public function gender_type ()
    // {
    //     return $this->hasOne(Gender::class);
    // }

    public function ward ()
    {
        return $this->hasOne(Ward::class, 'id', 'ward_id');
    }
}
