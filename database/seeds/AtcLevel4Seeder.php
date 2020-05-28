<?php

use Illuminate\Database\Seeder;
use App\AtcLevel4;

class AtcLevel4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AtcLevel4::create([
            'name' => 'AtcLevel4_1',
            'atc_level3s_id' => 1,
        ]);
        AtcLevel4::create([
            'name' => 'AtcLevel4_2',
            'atc_level3s_id' => 2,
        ]);
        AtcLevel4::create([
            'name' => 'AtcLevel4_3',
            'atc_level3s_id' => 3,
        ]);
    }
}
