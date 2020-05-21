<?php

use App\Effect;
use Illuminate\Database\Seeder;

class EffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Effect::create( [
            'id'=>1,
            'name'=>'inhibiteur'
            ] );
            
                        
            
            Effect::create( [
            'id'=>2,
            'name'=>'inducteur'
            ] );
            
                        
            
            Effect::create( [
            'id'=>3,
            'name'=>'substrat'
            ] );
            
                        
            
            Effect::create( [
            'id'=>4,
            'name'=>'ni inducteur ni inhibiteur'
            ] );
            
                        
            
            Effect::create( [
            'id'=>5,
            'name'=>'hépatotoxique'
            ] );
            
                        
            
            Effect::create( [
            'id'=>6,
            'name'=>'hypoglycémiant'
            ] );
            
                        
            
            Effect::create( [
            'id'=>7,
            'name'=>'hypokaliémiant'
            ] );
            
                        
            
            Effect::create( [
            'id'=>8,
            'name'=>'risque de malabsorbtion'
            ] );
            
                        
            
            Effect::create( [
            'id'=>9,
            'name'=>'modification'
            ] );
            
                        
            
            Effect::create( [
            'id'=>10,
            'name'=>'risque accru'
            ] );
            
                        
            
            Effect::create( [
            'id'=>11,
            'name'=>'ni inducteur ni inhibiteur ni substrat'
            ] );
            
                        
            
            Effect::create( [
            'id'=>12,
            'name'=>'avéré'
            ] );
            
                        
            
            Effect::create( [
            'id'=>14,
            'name'=>'pas de modification'
            ] );
            
                        
            
            Effect::create( [
            'id'=>15,
            'name'=>'néphrotoxique'
            ] );
            
                        
            
            Effect::create( [
            'id'=>16,
            'name'=>'hyperglycémiant'
            ] );
            
                        
            
            Effect::create( [
            'id'=>17,
            'name'=>'thrombogène'
            ] );
            
                        
            
            Effect::create( [
            'id'=>18,
            'name'=>'thrombopéniant'
            ] );
            
                        
            
            Effect::create( [
            'id'=>19,
            'name'=>'anticoagulant'
            ] );
            
                        
            
            Effect::create( [
            'id'=>20,
            'name'=>'protecteur'
            ] );
            
                        
            
            Effect::create( [
            'id'=>21,
            'name'=>'hyperkaliémiant'
            ] );
            
                        
            
            Effect::create( [
            'id'=>22,
            'name'=>'cardiotoxique'
            ] );
            
                        
            
            Effect::create( [
            'id'=>23,
            'name'=>'augmentation des taux de médicament '
            ] );
            
                        
            
            Effect::create( [
            'id'=>24,
            'name'=>'diminution du taux de médicament'
            ] );
            
                        
            
            Effect::create( [
            'id'=>25,
            'name'=>'pas de modification des taux de médicament'
            ] );
            
                        
            
            Effect::create( [
            'id'=>26,
            'name'=>'immunosuppresseur '
            ] );
            
                        
            
            Effect::create( [
            'id'=>27,
            'name'=>'immunostimulant'
            ] );
            
                        
            
            Effect::create( [
            'id'=>28,
            'name'=>'antiagrégant'
            ] );
            
                        
            
            Effect::create( [
            'id'=>29,
            'name'=>'ralentissement'
            ] );
            
                        
            
            Effect::create( [
            'id'=>30,
            'name'=>'augmentation'
            ] );
            
                        
            
            Effect::create( [
            'id'=>31,
            'name'=>'phytoestrogène'
            ] );
            
                        
            
            Effect::create( [
            'id'=>32,
            'name'=>'antioestrogène'
            ] );
    }
}
