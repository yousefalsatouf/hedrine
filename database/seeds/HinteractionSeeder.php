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
            'herb_id'=>6,
            'target_id'=>11,
            'note'=>'Des études cliniques montrent que l\'ail n\'a pas d\'effet sur le CYP1A2
            Zhou décrit des interactions théoriques au niveau enzymatique',
            'user_id'=>1,
            'force_id'=>1,
            'validated'=>NULL,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>2,
            'herb_id'=>6,
            'target_id'=>21,
            'note'=>'Certaines préparations d\'ail contenant de l\'allicine semblent induire l\'activité du CYP3A4. Cela a été démontré dans des recherches montrant une réduction significative des taux plasmatiques de saquinavir, un substrat du CYP3A4, chez les patients prenant d\'ail. 

            Cependant, d\'autres recherches suggèrent que d\'autres produits contenant de l\'ail et aussi de l\'allicine n\'ont pas d\'activité sur le métabolisme des substrats du CYP3A4. Dans une petite étude, avec un produit spécifique d\'ail (GarliPure Maximum Allicin Formula, Natrolm Chatsworth) ou 600 mg était consommé deux fois par jour (fournissant 3.600 µg d\'allicine par dose), pendant 12 jours consécutifs n\'a pas affecté significativement la pharmacocinétique du docétaxel, un substrat du CYP3A4. 
            
            D\'autres recherches suggèrent également que l\'huile d\'ail n\'affecte pas le CYP3A4. Des extraits contenant de l\'alliine et de l\'alliinase n\'affecte pas l\'activité du CYP3A4. Des recherches sur modèles animaux suggèrent qu\'un extrait aqueux d\'ail n\'affecte pas significativement les paramètres pharmacocinétiques de la rifampicine, un substrat du CYP3A4. 
            
            Enfin, des études cliniques utilisant le midazolam comme substrat témoin de l’activité du CYP3A4 ne montrent pas de modification significative de cette isoenzyme. ',
            'user_id'=>1,
            'force_id'=>6,
            'validated'=>NULL,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
            
                        
            
            Hinteraction::create( [
            'id'=>3,
            'herb_id'=>6,
            'target_id'=>26,
            'note'=>'Une des indications de l\'ail est un stimulant de l\'immunité',
            'user_id'=>1,
            'force_id'=>10,
            'validated'=>NULL,
            'created_at'=>NULL,
            'updated_at'=>NULL
            ] );
    }
}
