<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Общепит',
            'Бары, пабы, клубы',
            'Продуктовый ритейл',
            'Гостеприимство',
            'Автодело',
            'Магазин товаров',
            'Доставка еды',
            'Индустрия красоты',
            'Активный отдых, развлечения',
            'Островки, отделы в ТРЦ',
            'Производство',
            'Рекламный бизнес',
            'Аптеки',
            'Онлайн бизнес',
            'Бани, сауны',
            'Спорт',
            'Зоо бизнес',
            'Медицинские центры, стоматологии',
            'Строительный бизнес',
            'Туристический бизнес',
            'Образование',
            'Другие виды бизнеса'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);
        }

    }
}
