<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CitiesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'slug' => 'nur_sultan',
            'genitive' => 'Нур-Султана',
            'prepositional' => 'Нур-Султане',
            'instrumental' => 'Нур-Султаном'
        ]);

        DB::table('cities')->insert([
            'slug' => 'almaty',
            'genitive' => 'Алматы',
            'prepositional' => 'Алмате',
            'instrumental' => 'Алматой'
        ]);
    }
}
