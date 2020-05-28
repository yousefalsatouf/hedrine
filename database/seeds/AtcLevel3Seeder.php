<?php

use Illuminate\Database\Seeder;
use App\AtcLevel3;
class AtcLevel3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AtcLevel3::create([
            'name' => 'AtcLevel3_1',
            'atc_level2s_id' => 1,
        ]);
        AtcLevel3::create([
            'name' => 'AtcLevel3_2',
            'atc_level2s_id' => 2,
        ]);
        AtcLevel3::create([
            'name' => 'AtcLevel3_3',
            'atc_level2s_id' => 3,
        ]);
    }
}
