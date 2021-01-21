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
        $user->firstname = 'Shadrack';
        $user->lastname = 'Bodje';
        $user->birthday = '1999-01-13';
        $user->email = 'shadrackemmanuel.bodje@ynov.com';
        $user->password = bcrypt('Ynov12345');
        $user->solde = '1500';
        $user->save(); //pour le sauvegarder dans la base de données
        
    }
}
