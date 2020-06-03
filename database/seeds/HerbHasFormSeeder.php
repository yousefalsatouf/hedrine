<?php

use Illuminate\Database\Seeder;
use App\HerbHasForm;

class HerbHasFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HerbHasForm::create([
            'herb_id' => '1',
            'herb_form_id' => 1
            
        ]);
        HerbHasForm::create([
            'herb_id' => '2',
            'herb_form_id' => 2
            
        ]);
        HerbHasForm::create([
            'herb_id' => '3',
            'herb_form_id' => 3
            
        ]);
        HerbHasForm::create([
            'herb_id' => '4',
            'herb_form_id' => 3
            
        ]);
        HerbHasForm::create([
            'herb_id' => '4',
            'herb_form_id' => 2
            
        ]);
        HerbHasForm::create([
            'herb_id' => '5',
            'herb_form_id' => 3
            
        ]);
        HerbHasForm::create([
            'herb_id' => '6',
            'herb_form_id' => 2
            
        ]);
        HerbHasForm::create([
            'herb_id' => '6',
            'herb_form_id' => 1
        ]);

        HerbHasForm::create([
            'herb_id' => '6',
            'herb_form_id' => 3
        ]);
       
        
    }
}
