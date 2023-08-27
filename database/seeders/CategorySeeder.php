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
                'name' => 'Projects',
            ],
            [
                'parent_id' => 1,
                'name' => 'Ongoing Projects',
            ],
            [
                'parent_id' => 1,
                'name' => 'Completed Projects',
            ],
            [
                'name' => 'News & Notice',
            ],
            [
                'parent_id' => 4,
                'name' => 'Notices',
            ],
            [
                'parent_id' => 4,
                'name' => 'Vacancy',
            ],
            [
                'name' => 'Events',
            ],
            [
                'name' => 'Blog',
            ],
            [
                'name' => 'Photo Gallery',
            ],
            [
                'name' => 'Video Gallery',
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
