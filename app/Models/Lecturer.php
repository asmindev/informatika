<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function tridharmas()
    {
        return $this->hasMany(Tridharma::class);
    }
    // get image attribute
    public function getImageAttribute($value)
    {
        if (str_starts_with($value, 'http')) {
            return $value;
        } else {
            return asset("storage/$value");
        }
    }
}
