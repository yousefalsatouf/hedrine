<?php

use Illuminate\Database\Seeder;
use App\HerbForm;

class HerbFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HerbForm::create([
            'name' => 'Poudre',
        ]);

        HerbForm::create([
            'name' => 'Gellule',
        ]);

        HerbForm::create([
            'name' => 'Thé',
        ]);
    }
}
