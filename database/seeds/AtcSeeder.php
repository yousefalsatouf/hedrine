<?php

use Illuminate\Database\Seeder;

class AtcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Atc::create( [

            'name'=>'A16AX',
            'drug_families_id'=>7,
        ] );
        \App\Atc::create( [

            'name'=>'B06AC',
            'drug_families_id'=>8,
        ] );
        \App\Atc::create( [

            'name'=>'C10B',
            'drug_families_id'=>4,
        ] );
    }
}
