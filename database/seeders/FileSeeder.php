<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curPath = config('app.upload');
        $files = array_diff(scandir(base_path($curPath)), ['..', '.']);
        $onlyFiles = [];
        $this->findFiles($files, $onlyFiles, $curPath);
        DB::table('files')->insert($onlyFiles);
    }

    private function findFiles($files, &$onlyFiles, $curPath)
    {
        foreach ($files as $file) {
            $newPath = $curPath . '/' . $file;
            if (is_dir(base_path($newPath))) {
                $newFiles = array_diff(scandir(base_path($newPath)), ['..', '.']);
                $this->findFiles($newFiles, $onlyFiles, $newPath);
            } else {
                $onlyFiles[] = [
                    'name' => $file,
                    'original_name' => $file,
                    'path' => '/' . $curPath . '/' . $file
                ];
            }
        }
    }
}
