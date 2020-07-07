<?php

use Illuminate\Database\Seeder;
use App\Atc;

class AtcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atc::create( [
            'name'=>'A16AX',
            'drug_families_id'=>7,
        ] );
        Atc::create( [
            'name'=>'B06AC',
            'drug_families_id'=>8,
        ] );
        Atc::create( [
            'name'=>'C10B',
            'drug_families_id'=>4,
        ] );

    }
}
