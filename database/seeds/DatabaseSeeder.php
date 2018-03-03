<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        Factory(App\User::class,5)->create();
        Factory(App\Model\Product::class,50)->create();
        Factory(App\Model\Review::class,300)->create();

    }
}
