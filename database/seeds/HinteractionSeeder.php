<?php

use App\Hinteraction;
use Illuminate\Database\Seeder;

class HinteractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

Hinteraction::create( [
    'id'=>1,
    'herb_id'=>28,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interférer avec une hormonothérapie.\r\nLa génistéine et la daidzéine sont distribuées dans le corps avec des pics de concentrations plasmatiques à 4-8 heures après administration à court terme et excrété dans les 24 heures.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>2,
    'herb_id'=>39,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>3,
    'herb_id'=>40,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>4,
    'herb_id'=>41,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>5,
    'herb_id'=>42,
    'target_id'=>13,
    'force_id'=>5,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>9,
    'herb_id'=>46,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>10,
    'herb_id'=>36,
    'target_id'=>13,
    'force_id'=>4,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie. Mais une étude clinique démontre que l\'actée n\'a pas d\'activité',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>13,
    'herb_id'=>47,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>14,
    'herb_id'=>48,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>15,
    'herb_id'=>49,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>17,
    'herb_id'=>25,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.\r\nLa génistéine et la daidzéine sont distribuées dans le corps avec des pics de concentration plasmatiques à 4-8 heures après 1 administration et excrétées dans les 24 heures. L\'administration chronique d\'isoflavones de trèfle rouge a dans une demi-vie de 13-16 heures',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>18,
    'herb_id'=>27,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Les phytostérols sont susceptibles d\'interagir avec l\'hormonothérapie.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>19,
    'herb_id'=>74,
    'target_id'=>13,
    'force_id'=>3,
    'notes'=>'Les phyto-œstrogènes sont susceptibles d\'interagir avec l\'hormonothérapie.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>20,
    'herb_id'=>1,
    'target_id'=>10,
    'force_id'=>5,
    'notes'=>'Une très faible activité a été montrée in vitro surement conséquence clinique',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>21,
    'herb_id'=>1,
    'target_id'=>21,
    'force_id'=>3,
    'notes'=>'Les polysaccharides immunomodulants sont susceptibles d\'interagir avec les anticorps monoclonaux. Mais il n\'y a pas d\'argument pour penser qu\'il y ait une interaction avec les cytotoxiques autres que ceux ayant une structure d\'anticorps.',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>22,
    'herb_id'=>1,
    'target_id'=>7,
    'force_id'=>5,
    'notes'=>'',
    'user_id'=>2
    ] );
    
                
    
    Hinteraction::create( [
    'id'=>23,
    'herb_id'=>1,
    'target_id'=>1,
    'force_id'=>5,
    'notes'=>'4 études cliniques\r\n',
    'user_id'=>2
    ] );
    
    
    }
}
