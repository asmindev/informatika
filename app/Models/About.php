<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'abouts';

    // Overriding the save method to prevent multiple entries
    public function save(array $options = [])
    {
        if (self::count() >= 1) {
            throw new \Exception('Only one entry is allowed in this table.');
        }
        parent::save($options);
    }
}
