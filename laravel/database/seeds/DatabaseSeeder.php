<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // Admin
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

    // Usuarios

        DB::table('users')->insert([
            'ci' => '6534534',
            'nombre' => 'Mario Lopez',
            'email' => 'mario@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '67754345',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'ci' => '2342434',
            'nombre' => 'Carlos Silva',
            'email' => 'carlos@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '33453455',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'ci' => '5345436',
            'nombre' => 'Julia Apaza',
            'email' => 'julia@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '55435352',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'ci' => '2347899',
            'nombre' => 'Roberto Rodas',
            'email' => 'roberto@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '775465434',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'ci' => '3354535',
            'nombre' => 'Pedro Campos',
            'email' => 'pedro@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '66345346',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'ci' => '4445353',
            'nombre' => 'Marcos Perez',
            'email' => 'marcos@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '88657565',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'ci' => '11323443',
            'nombre' => 'Silvana Caceres',
            'email' => 'silvana@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '56456455',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'ci' => '55435342',
            'nombre' => 'Fidelia Morales',
            'email' => 'fidelia@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '88657656',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'ci' => '3323134',
            'nombre' => 'Tatiana Quispe',
            'email' => 'tatiana@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '34532342',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'ci' => '7776545',
            'nombre' => 'Jorge Vaca',
            'email' => 'jorge@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '345634634',
            'tipo' => 'Usuario',
        ]);

    // Tipos Proceso


        DB::table('tipo_proceso')->insert([
            'nombre' => 'Penal',
        ]);

        DB::table('tipo_proceso')->insert([
            'nombre' => 'Civil',
        ]);

        DB::table('tipo_proceso')->insert([
            'nombre' => 'Familiar',
        ]);

        DB::table('tipo_proceso')->insert([
            'nombre' => 'Laboral',
        ]);

    // Juzgados

        DB::table('juzgado')->insert([
            'nombre' => 'Publico Civil Comercial',
            'departamento' => 'Santa Cruz',
        ]);

        DB::table('juzgado')->insert([
            'nombre' => 'Publico de Familia',
            'departamento' => 'Santa Cruz',
        ]);

        DB::table('juzgado')->insert([
            'nombre' => 'Publico de la Niñez y Adolescencia',
            'departamento' => 'Santa Cruz',
        ]);

        DB::table('juzgado')->insert([
            'nombre' => 'De Partido del Trabajo y Seguridad Social',
            'departamento' => 'Santa Cruz',
        ]);

        DB::table('juzgado')->insert([
            'nombre' => 'Administrativos Coactivos Fiscales Tributarios',
            'departamento' => 'Santa Cruz',
        ]);

        DB::table('juzgado')->insert([
            'nombre' => 'De Sentencia Penal',
            'departamento' => 'Santa Cruz',
        ]);


        // Expedientes



        // Fojas



    }
}
