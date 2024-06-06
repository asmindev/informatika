<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Document extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function getFileAttribute($value)
    {
        // if value starts with http
        if (str_starts_with($value, 'http')) {
            return $value;
        } else {
            return asset("storage/$value");
        }
    }
}
