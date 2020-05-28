<?php

use Illuminate\Database\Seeder;
use App\AtcLevel2;
class AtcLevel2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AtcLevel2::create([
            'nom' => 'AtcLevel2_1',
            'drug_families_id' => 1,
        ]);
        AtcLevel2::create([
            'nom' => 'AtcLevel2_2',
            'drug_families_id' => 2,
        ]);
        AtcLevel2::create([
            'nom' => 'AtcLevel2_3',
            'drug_families_id' => 3,
        ]);
    }
}
