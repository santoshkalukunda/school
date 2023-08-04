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
            [
                'name' => 'program',
                'name' => 'event',
                'name' => 'blog',
                'name' => 'page',
            ],
        ];
        foreach ($categories as $category) {
            # code...
            Category::create($category);
        }
    }
}
