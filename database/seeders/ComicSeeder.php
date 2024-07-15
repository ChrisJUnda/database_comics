<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $comics = include __DIR__ . '/comics.php';

        foreach ($comics as $comic) {

            if (is_array($comic['artist'])) {
                $comic['artists'] = implode(',', $comic['artists']);
            }
            if (is_array($comic['writers'])) {
                $comic['writers'] = implode(',', $comic['writers']);
            }
            Comic::create($comic);
        }
    }
}
