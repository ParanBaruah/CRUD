<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    public function getDateAttribute($value){
        return date("d-M-Y",strtotime($value));
    }
}
