<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $categories = [
            //2
            [
                'name' => 'Our Features',
            ],
            //3
            [
                'name' => 'Events',
            ],
            //4
            [
                'name' => 'Blogs',
            ],
            [
                'name' => 'No-category',
            ],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
