<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        \App\Models\User::factory()->create();
        // DB::table('config_commons')->insert([
        //     'option_name' => 'adress',
        //     'option_value' => '',
        //     'comment' => 'Этот адрес будет точкой отправления в маршруте курьера '
        // ]);
        // $isadress = DB::table('config_commons')->where('option_name', 'adress')->first();
        // if(!$isadress){
        //     DB::table('config_commons')->insert([
        //     'option_name' => 'adress',
        //     'option_value' => '',
        //     'comment' => 'Этот адрес будет точкой отправления в маршруте курьера '
        // ]);
        // }

    }
}
