<?php

use Illuminate\Database\Seeder;
use App\Herb;

class HerbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Herb::create([
            'name' => 'Echinacées',
            'sciname' => 'Echinacea sp.',
            'user_id' => 1,
        ]);
        Herb::create([
            'name' => 'Orange',
            'sciname' => 'Citrus sinensis (L.) Osbeck',
            'user_id' => 2,
        ]);
        Herb::create([
            'name' => 'Orange de Seville, Bigaradier',
            'sciname' => 'Citrus aurantium L. ssp aurantium Engler',
            'user_id' => 2,
        ]);
        Herb::create([
            'name' => 'Citron vert',
            'sciname' => 'Citrus × lima Macfad.',
            'user_id' => 2,
        ]);
        Herb::create([
            'name' => 'Pomme',
            'sciname' => 'Malus sylvestris Mill',
            'user_id' => 2,
        ]);
        Herb::create([
            'name' => 'Ail',
            'sciname' => 'Allium sativum L.',
            'user_id' => 2,
        ]);
        Herb::create([
            'name' => 'Séné',
            'sciname' => 'Cassia angustifolia M.Vahl',
            'user_id' => 2,
        ]);
        Herb::create([
            'name' => 'Thé',
            'sciname' => 'Camellia sinensis (L.) Kuntze',
            'user_id' => 2,
        ]);
        Herb::create([
            'name' => 'Gingembre',
            'sciname' => 'Zingiber officinale Roscoe',
            'user_id' => 1,
        ]);
        Herb::create([
            'name' => 'Ginkgo biloba',
            'sciname' => 'Ginkgo biloba L.',
            'user_id' => 1,
        ]);
        Herb::create([
            'name' => 'Testing',
            'sciname' => 'Thuerr',
            'user_id' => 2,
        ]);
    }
}
