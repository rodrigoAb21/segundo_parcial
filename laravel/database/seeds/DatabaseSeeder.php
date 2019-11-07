<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'ci' => '0000001',
            'nombre' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '33546542',
            'tipo' => 'admin',
        ]);

    }
}
