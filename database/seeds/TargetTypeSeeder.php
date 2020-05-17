<?php

use App\TargetType;
use Illuminate\Database\Seeder;

class TargetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TargetType::create([
            'name' => 'CAS',
            'rank' => '2',
            'description' => 'Case report',
        ]);

        TargetType::create([
            'name' => 'PC',
            'rank' => '4',
            'description' => 'Pharmacocinetique',
        ]);

        TargetType::create([
            'name' => 'PD',
            'rank' => '5',
            'description' => 'Pharmacodynamique',
        ]);

        TargetType::create([
            'name' => 'EC',
            'rank' => '1',
            'description' => 'Etude clinique',
        ]);

        TargetType::create([
            'name' => 'EMA',
            'rank' => '7',
            'description' => 'Etude sur Modèle Animal',
        ]);

        TargetType::create([
            'name' => 'EIV',
            'rank' => '8',
            'description' => 'Etude In Vitro',
        ]);

        
    }
}
