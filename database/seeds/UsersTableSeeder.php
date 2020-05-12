<?php


use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Dubois',
            'firstname' => 'David',
            'team' => 'DPM',
            'tel1' => '',
            'tel2' => '',
            'email' => 'david.dubois@ulb.be',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('admin'),
            'is_active' => 0,
            'role_id' => 1,

        ]);

        User::create([

            'name' => 'Ndayegamiye',
            'firstname' => 'Thierry',
            'team' => 'DPM',
            'tel1' => '048556262',
            'tel2' => '024875454',
            'email' => 'thierry.ndayegamiye@gmail.be',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('editor'),
            'is_active' => 0,
            'role_id' => 3,

        ]);

        User::create([

            'name' => 'Makandila',
            'firstname' => 'Jean Paul',
            'team' => 'DPM',
            'tel1' => '0487854521',
            'tel2' => '02897452',
            'email' => 'makandila.jp@ulb.be',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('publisher'),
            'is_active' => 0,
            'role_id' => 2,

        ]);
        User::create([

            'name' => 'Tester',
            'firstname' => 'Testing',
            'team' => 'DPM',
            'tel1' => '048787454',
            'tel2' => '025545855',
            'email' => 'test.tested@ulb.be',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('lector'),
            'is_active' => 0,
            'role_id' => 4,

        ]);
    }
}
