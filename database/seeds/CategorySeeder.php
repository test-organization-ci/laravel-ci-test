<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories')->insert([
        //     'content' => Str::random(10)
        // ]);
      factory(App\Category::class, 10)->create();
    }
}
