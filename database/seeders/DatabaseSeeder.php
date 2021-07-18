<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $roles->new Roles::();
       // $roles->id="1";
        $roles->nombre="Admin";
        $roles->url="administrador";
        $roles->save();

        $roles->new Roles::();
       // $roles->id="2";
        $roles->nombre="Usuario";
        $roles->url="usuario";
        $roles->save();

        $roles->new Roles::();
        //$roles->id="3";
        $roles->nombre="Invitado";
        $roles->url="invitado";
        $roles->save();
    }
}
