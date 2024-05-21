<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class News extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'id' => 'string',
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Uuid::uuid4();
        });
    }
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
