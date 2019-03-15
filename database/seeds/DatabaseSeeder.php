<?php

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
        factory(\App\User::class,10)->create();
        factory(\App\Models\Product::class,10)->create();
        factory(\App\models\Article::class,100)->create();
    }
}
