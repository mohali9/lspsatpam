<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'Kesehatan',
        	'slug' => str_slug('mata')
        ]);

        Category::create([
        	'name' => 'Pendidikan',
        	'slug' => str_slug('belajar')
        ]);
    }
}
