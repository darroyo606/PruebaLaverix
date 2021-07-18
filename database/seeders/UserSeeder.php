<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'nombre' => 'Adminitrador',
            'apellido' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'password' => Hash::make('Administrador1'),
        ]);
    }
}
