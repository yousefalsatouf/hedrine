<?php

use Illuminate\Database\Seeder;
use App\Drug;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drug::create([
            'name' => 'BEVACIZUMAB',
            'user_id' => 2,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CETUXIMAB',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'PANITUMUMAB',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'RITUXIMAB',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'TRASTUZUMAB',
            'user_id' => 1,
            'drug_families_id' => 3,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CARBOPLATINE',
            'user_id' => 1,
            'drug_families_id' => 3,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CISPLATINE',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'OXALIPLATINE',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CHLORAMBUCIL',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'MELPHALAN',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'MELPHALAN',
            'user_id' => 1,
            'drug_families_id' => 3,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CYCLOPHOSPHAMIDE',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CYCLOPHOSPHAMIDE',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CARMUSTINE',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'FOTEMUSTINE',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'EchinacBENDAMUSTINE',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'BUSULFAN',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'BUSULFAN',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'DACARBAZINE',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'IFOSFAMIDE',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'ESTRAMUSTINE',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'MITOMYCINE C',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'PIPOBROMAN',
            'user_id' => 1,
            'drug_families_id' => 3,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'PROCARBAZINE',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'THIOTEPA',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
    }
}
