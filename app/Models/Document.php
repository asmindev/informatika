<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Document extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Uuid::uuid4();
        });
    }
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
