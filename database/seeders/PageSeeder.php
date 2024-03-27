<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'title' => 'About Us',
                'user_id' => 1,
            ],
            [
                'title' => 'Vision',
                'user_id' => 1,
            ],
            [
                'title' => 'Mission',
                'user_id' => 1,
            ],
            [
                'title' => 'Message From Chairperson',
                'user_id' => 1,
            ],
            [
                'title' => 'Message From Principal',
                'user_id' => 1,
            ],
            [
                'title' => 'Message From Coordinator',
                'user_id' => 1,
            ],
            [
                'title' => 'Ad',
                'user_id' => 1,
            ],
        ];

        foreach ($pages as  $page) {
            Page::create($page);
        }

    }
}
