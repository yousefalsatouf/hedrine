<?php

use Illuminate\Database\Seeder;
use App\DrugFamily;

class DrugFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DrugFamily::create([
            'nom' => 'L - ANTINEOPLASIQUES ET IMMUNOMODULATEURS',
            
        ]);
        DrugFamily::create([
            'nom' => 'N - SYSTEME NERVEUX',
            
        ]);
        DrugFamily::create([
            'nom' => 'C - SYSTEME CARDIOVASCULAIRE ',
            
        ]);
    }
}
