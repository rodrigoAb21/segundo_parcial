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
            'nombre' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '33546542',
            'tipo' => 'admin',
        ]);

    // Usuarios

        DB::table('users')->insert([
            'nombre' => 'Mario Lopez',
            'email' => 'mario@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '67754345',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'nombre' => 'Carlos Silva',
            'email' => 'carlos@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '33453455',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'nombre' => 'Julia Apaza',
            'email' => 'julia@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '55435352',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'nombre' => 'Roberto Rodas',
            'email' => 'roberto@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '775465434',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'nombre' => 'Pedro Campos',
            'email' => 'pedro@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '66345346',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'nombre' => 'Marcos Perez',
            'email' => 'marcos@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '88657565',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'nombre' => 'Silvana Caceres',
            'email' => 'silvana@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '56456455',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'nombre' => 'Fidelia Morales',
            'email' => 'fidelia@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '88657656',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
            'nombre' => 'Tatiana Quispe',
            'email' => 'tatiana@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '34532342',
            'tipo' => 'Usuario',
        ]);

        DB::table('users')->insert([
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

        DB::table('expediente')->insert([
            'nurej' => '2019111105',
            'web_id' => 'd45a7',
            'fecha_recepcion' => \Carbon\Carbon::now(),
            'descripcion' => 'Proceso 1',
            'procedimiento' => 'Procedimiento 1',
            'Materia' => 'Materia 1',
            'nro_fojas' => 0,
            'juez_id' => 2,
            'juzgado_id' => 1,
            'tipo_proceso_id' => 1,
        ]);

        DB::table('expediente')->insert([
            'nurej' => '2019111205',
            'web_id' => 's4w13',
            'fecha_recepcion' => \Carbon\Carbon::now(),
            'descripcion' => 'Proceso 2',
            'procedimiento' => 'Procedimiento 2',
            'Materia' => 'Materia 2',
            'nro_fojas' => 0,
            'juez_id' => 3,
            'juzgado_id' => 2,
            'tipo_proceso_id' => 3,
        ]);

        // Fojas



    }
}
