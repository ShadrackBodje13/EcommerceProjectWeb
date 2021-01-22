<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User as User;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User;
        $user->firstname = 'Killian';
        $user->lastname = 'Grincourt';
        $user->birthday = '2001-08-32';
        $user->email = 'killian.grincourt@ynov.com';
        $user->password = bcrypt('azerty');
        $user->solde = '1600';
        $user->save(); //pour le sauvegarder dans la base de données
        
    }
}
