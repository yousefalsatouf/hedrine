<?php

use App\HinteractionHasEffect;
use Illuminate\Database\Seeder;

class HinteractionHasEffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HinteractionHasEffect::create([
            'effect_id' => '1',
            'hinteraction_id' => '1',
            
        ]);
        HinteractionHasEffect::create([
            'effect_id' => '2',
            'hinteraction_id' => '1',
            
        ]);
        HinteractionHasEffect::create([
            'effect_id' => '2',
            'hinteraction_id' => '2',
            
        ]);
        HinteractionHasEffect::create([
            'effect_id' => '1',
            'hinteraction_id' => '3',
            
        ]);
        HinteractionHasEffect::create([
            'effect_id' => '2',
            'hinteraction_id' => '3',
            
        ]);
        HinteractionHasEffect::create([
            'effect_id' => '3',
            'hinteraction_id' => '3',
            
        ]);
    }
}
