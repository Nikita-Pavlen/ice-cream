<?php

namespace Database\Seeders;

use App\Models\File;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    const IMAGE_DIR = 'services';
    private $arNames = [
        'Quality Maintain',
        'Individual Approach',
        'Celebration Ice Cream',
        'Delivery To Any Point'
    ];

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
        $fields = [];
        $faker = Factory::create();
        foreach ($files as $key => $file) {
            $fields[] = [
                'name' => $this->arNames[$key],
                'image_id' => $file->id,
                'preview_text' => $faker->realTextBetween(150, 200)
            ];
        }

        DB::table('services')->insert($fields);
    }
}
