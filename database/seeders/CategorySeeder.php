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
                'name' => 'Program',
            ],
            [
                'name' => 'Event',
            ],
            [
                'name' => 'Blog',
            ],
            [
                'name' => 'Page',
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
