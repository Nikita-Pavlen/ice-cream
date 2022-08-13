<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class HeaderSlide extends Model
{
    use HasFactory;

    public function file()
    {
        return $this->hasOne(File::class, 'id', 'image_id');
    }
}
