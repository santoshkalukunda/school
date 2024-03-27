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
            //1
            [
                'name' => 'Our Features',
            ],
            //2
            [
                'name' => 'Events',
            ],
            //3
            [
                'name' => 'Blogs',
            ],
            //4
            [
                'name' => 'What Students Say',
            ],
            //5
            [
                'name' => 'Why Choose Us',
            ],
            //6
            [
                'name' => 'No-category',
            ],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
