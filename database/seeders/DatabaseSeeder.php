<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

//        $this->call(RolesTableSeeder::class);
//        $this->call(UsersTableSeeder::class);
//        $this->call(CitiesTableSeeder::class);
//        $this->call(CategoriesTableSeeder::class);
//        $this->call(CompanyTableSeeder::class);
        $this->call(ImagesSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
