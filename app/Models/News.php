<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class News extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // get image attribute
    public function getImageAttribute($value)
    {
        // if value starts with http
        if (str_starts_with($value, 'http')) {
            return $value;
        } else {
            return asset("storage/$value");
        }
    }
}
