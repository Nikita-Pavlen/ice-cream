<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\File;

class HeaderSlideSeeder extends Seeder
{
    const IMAGE_DIR = 'header_carousel';
    private $arNames = [
        'Made From Our Own Organic Milk',
        'Traditional Ice Cream Since 1950'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = File::query()->where('path', 'like', '%header_carousel%')->get(['id']);
        $fields = [];
        foreach ($files as $key => $file) {
            $fields[] = [
                'name' => $this->arNames[$key],
                'image_id' => $file->id
            ];
        }

        DB::table('header_slides')->insert($fields);
    }
}
