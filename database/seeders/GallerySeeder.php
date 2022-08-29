<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    const IMAGE_DIR = 'gallery';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = File::query()
            ->where('path', 'like', '%' . self::IMAGE_DIR . '%')
            ->get(['id']);
        $categories = Category::query()->get(['id']);
        $categoryCount = count($categories);
        $fields = [];
        foreach ($files as $key => $file) {
            $fields[] = [
                'file_id' => $file->id,
                'category_id' => $categories[$key % $categoryCount]->id
            ];
        }

        DB::table('gallery_images')->insert($fields);
    }
}
