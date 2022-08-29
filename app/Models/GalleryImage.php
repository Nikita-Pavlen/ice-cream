<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'id', 'category_id');
    }

    public function file()
    {
        return $this->hasOne(File::class, 'id', 'file_id');
    }
}
