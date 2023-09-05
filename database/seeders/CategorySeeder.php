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
                'name' => 'Program',
            ],
            //2
            [
                'name' => 'Humanitaran',
            ],
            //3
            [
                'name' => 'Publications',
            ],
            //4
            [
                'name' => 'Announcement',
            ],
            //parent id 1
            [
                'parent_id' => 1,
                'name' => 'Ongoing Program',
            ],
            [
                'parent_id' => 1,
                'name' => 'Completed Program',
            ],

            //parent id 2
            [
                'parent_id' => 2,
                'name' => 'Lanslide',
            ],
            [
                'parent_id' => 2,
                'name' => 'Flood Response',
            ],
            [
                'parent_id' => 2,
                'name' => 'Fire',
            ],
            [
                'parent_id' => 2,
                'name' => 'Earthquake',
            ],
            [
                'parent_id' => 2,
                'name' => 'Covid-19',
            ],
            //parent id 3
            [
                'parent_id' => 3,
                'name' => 'Reports',
            ],
            [
                'parent_id' => 3,
                'name' => 'Stories',
            ],
            [
                'parent_id' => 3,
                'name' => 'IEC',
            ],
            [
                'parent_id' => 3,
                'name' => 'Gallery',
            ],
            //parent id 4
            [
                'parent_id' => 4,
                'name' => 'Vacancy',
            ],
            [
                'parent_id' => 4,
                'name' => 'Procurement',
            ],
            [
                'parent_id' => 4,
                'name' => 'Notice/Blog',
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
