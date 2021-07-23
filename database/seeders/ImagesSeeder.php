<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 250; $i++) {
            $images =
                [
                    'url' => \Faker\Provider\Image::image('img', 578, 340),
                    'title' => '-',
                    'post_id' => rand(1, 50)
                ];
            Image::query()->create($images);
        }
    }
}
