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
            'route' => 'injectable',
            'user_id' => 2,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CETUXIMAB',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'PANITUMUMAB',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'RITUXIMAB',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'TRASTUZUMAB',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 3,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CARBOPLATINE',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 3,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CISPLATINE',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'OXALIPLATINE',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CHLORAMBUCIL',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'MELPHALAN',
            'route' => 'per os',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'MELPHALAN',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 3,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CYCLOPHOSPHAMIDE',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CYCLOPHOSPHAMIDE',
            'route' => 'per os',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'CARMUSTINE',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'FOTEMUSTINE',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'EchinacBENDAMUSTINE',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'BUSULFAN',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'BUSULFAN',
            'route' => 'per os',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'DACARBAZINE',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'IFOSFAMIDE',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'ESTRAMUSTINE',
            'route' => 'per os',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'MITOMYCINE C',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'PIPOBROMAN',
            'route' => 'per os',
            'user_id' => 1,
            'drug_families_id' => 3,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'PROCARBAZINE',
            'route' => 'per os',
            'user_id' => 1,
            'drug_families_id' => 1,
            'route_id' => 2,
            'atc_level_4s_id' => 1,
        ]);
        Drug::create([
            'name' => 'THIOTEPA',
            'route' => 'injectable',
            'user_id' => 1,
            'drug_families_id' => 2,
            'route_id' => 1,
            'atc_level_4s_id' => 1,
        ]);
    }
}
