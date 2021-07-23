<?php

namespace Database\Seeders;

use App\Models\Catalog;
use App\Models\Catalog_meta;
use App\Models\Category_Catalog;
use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Nubs\RandomNameGenerator\All;

class  CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  1 компания
      //  2 Связь компании с категорией
      //  3 Меты

        for ($i = 0; $i < 50; $i++) {
            $item = [
                'city_id' => rand(1,2),
                'user_id' => 1,
                'title' => All::create(),
                'slug' => Str::slug('title'),
                'price' => rand(6500000,100000000),
                'body' => 'это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. ',
            ];
           $catalog =  Catalog::query()->create($item);

            $category = Category_Catalog::query()->create([
                'catalog_id' => $catalog->id,
                'category_id' => rand(1,20),
            ]);

            $metas = [
                'form.legal'=>rand(1,0),
                'age'=>rand(1,100),
                'franchise'=>rand(1,0),
                'net_profit'=>rand(10000,10000000),
                'check'=>rand(1000,1000000),
                'payback'=>rand(1,50),
                'monthly_check'=>rand(1000,1000000),
                'premises'=>rand(1,0),
                'owned'=>rand(1,0),
                'on_lease'=>rand(1,0),
                'rooms'=>rand(1,40),
                'total_area'=>rand(1,100),
                'rental_price'=>rand(100000,100000000),
                'service_per_month'=>rand(10000,10000000),
                'staff'=>rand(1,0),
                'employees'=>rand(1,40),
                'wages'=>rand(10000,30000),
                'equipment_and_furniture'=>rand(1,0),
                'equipment_list'=>All::create(),
                'furniture_list'=>All::create(),
                'automation'=>rand(0,1),
                'financial_accounting'=>rand(1,0),
                'client_base'=>rand(0,1),
                'video_control'=>rand(0,1),
                'recording_calls'=>rand(0,1),
                '2gis'=>rand(0,1),
                'planks_ads'=>rand(0,1),
                'site'=>All::create(),
                'facebook'=>rand(0,1),
                'instagram'=>rand(0,1),
                'vkontakte'=>rand(0,1),
                'contextual_advertising'=>rand(0,1),
                'seo'=>rand(0,1),
                'Add_costs_per_month'=>rand(0,1),
            ];

            foreach ($metas as $key => $value) {
                Catalog_meta::query()->create([
                    'option' => $key,
                    'value' => $value,
                    'catalog_id'=> $catalog->id
            ]);
            }
        }




    }
}
