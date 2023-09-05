<?php

namespace Database\Seeders;

use App\Models\TeamType;
use Illuminate\Database\Seeder;

class TeamTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teamTypes = [
            [

                'name' => 'Senior Management Team',
            ],
            [

                'name' => 'Excutive Board',
            ]
        ];
        foreach ($teamTypes as $teamType) {
            TeamType::create($teamType);
        }
    }
}
