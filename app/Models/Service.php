<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function file()
    {
        return $this->hasOne(File::class, 'id', 'image_id');
    }
}
