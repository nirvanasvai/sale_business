<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'email' => 'vstelectric@gmail.com',
            'phone' => '77078577666',
            'password' => bcrypt('12341234###'),
            'role_id' => 1
        ]);
    }
}
