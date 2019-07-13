<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        Category::create(['name' => 'Addition']);
        Category::create(['name' => 'Subtraction']);
        Category::create(['name' => 'Multiplication']);
        Category::create(['name' => 'Division']);
    }
}
