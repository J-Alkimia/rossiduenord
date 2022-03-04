<?php

use Illuminate\Database\Seeder;
use Faker\Generator as faker;
use App\User;
use App\Bank;
use App\Business;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $name = [
            [
                'name' => 'Mps'
            ],
            [
                'name' => 'Unicredit'
            ],
            [
                'name' => 'San Paolo'
            ],
            [
                'name' => 'Poste'
            ],
            [
                'name' => 'Widiba'
            ],
        ];

        for ($i = 0; $i < 5; $i++) {
            $d = new User;
            $d->created_by =  'financial';
            $d->name = $name[$i]['name'];
            $d->referent = $faker->name();
            $d->email = $faker->email();
            $d->password = 'password';
            $d->role = 'bank';
            $d->save();
        }
        for ($i = 0; $i < 5; $i++) {
            $d = new User;
            $d->created_by =  'Mps';
            $d->name = $name[$i]['name'];
            $d->referent = $faker->name();
            $d->email = $faker->email();
            $d->password = 'password';
            $d->role = 'business';
            $d->save();
        }
    }    
}
