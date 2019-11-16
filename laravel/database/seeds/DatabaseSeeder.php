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
            'ci' => '84152356',
            'codigo' => '201556213',
            'nombre' => 'Mario Lopez',
            'email' => 'mario@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '67754345',
            'tipo' => 'Juez',
        ]);

        DB::table('users')->insert([
            'ci' => '55485161',
            'codigo' => '2003215455',
            'nombre' => 'Carlos Silva',
            'email' => 'carlos@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '33453455',
            'tipo' => 'Juez',
        ]);

        DB::table('users')->insert([
            'ci' => '77789451',
            'codigo' => '200354651',
            'nombre' => 'Julia Apaza',
            'email' => 'julia@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '55435352',
            'tipo' => 'Abogado',
        ]);

        DB::table('users')->insert([
            'ci' => '9983523',
            'codigo' => '200365156',
            'nombre' => 'Roberto Rodas',
            'email' => 'roberto@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '775465434',
            'tipo' => 'Abogado',
        ]);

        DB::table('users')->insert([
            'ci' => '8776686',
            'codigo' => '200765421',
            'nombre' => 'Pedro Campos',
            'email' => 'pedro@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '66345346',
            'tipo' => 'Abogado',
        ]);

        DB::table('users')->insert([
            'ci' => '7787668',
            'codigo' => '20112334',
            'nombre' => 'Marcos Perez',
            'email' => 'marcos@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '88657565',
            'tipo' => 'Abogado',
        ]);

        DB::table('users')->insert([
            'ci' => '34534544',
            'nombre' => 'Silvana Caceres',
            'email' => 'silvana@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '56456455',
            'tipo' => 'Demandado/Demandante',
        ]);

        DB::table('users')->insert([
            'ci' => '77456345',
            'nombre' => 'Fidelia Morales',
            'email' => 'fidelia@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '88657656',
            'tipo' => 'Demandado/Demandante',
        ]);

        DB::table('users')->insert([
            'ci' => '88456345',
            'nombre' => 'Tatiana Quispe',
            'email' => 'tatiana@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '34532342',
            'tipo' => 'Demandado/Demandante',
        ]);

        DB::table('users')->insert([
            'ci' => '53452664',
            'nombre' => 'Jorge Vaca',
            'email' => 'jorge@gmail.com',
            'password' => bcrypt('rodrigo'),
            'telefono' => '345634634',
            'tipo' => 'Demandado/Demandante',
        ]);

    // Tipos Proceso


        DB::table('tipo_proceso')->insert([
            'nombre' => 'ACCION DE CUMPLIMIENTO',
        ]);

        DB::table('tipo_proceso')->insert([
            'nombre' => 'CONCUSION',
        ]);

        DB::table('tipo_proceso')->insert([
            'nombre' => 'ASISTENCIA FAMILIAR',
        ]);

        DB::table('tipo_proceso')->insert([
            'nombre' => 'LESIONES GRAVES Y LEVES',
        ]);

        DB::table('tipo_proceso')->insert([
            'nombre' => 'TRAFICO DE SUSTANCIAS CONTROLADAS',
        ]);

        DB::table('tipo_proceso')->insert([
            'nombre' => 'VIOLENCIA FAMILIAR O DOMESTICA',
        ]);

        DB::table('tipo_proceso')->insert([
            'nombre' => 'ROBO AGRAVADO',
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
            'descripcion' => 'INICIO DE INVESTIGACION',
            'procedimiento' => 'FAMILIA',
            'Materia' => 'FAMILIA',
            'nro_fojas' => 0,
            'juez_id' => 2,
            'juzgado_id' => 1,
            'tipo_proceso_id' => 3,
            'dmt_id' => 8,
            'dmd_id' => 9,
            'rep_dmt_id' => 4,
            'rep_dmd_id' => 5,
        ]);

        DB::table('expediente')->insert([
            'nurej' => '2019111205',
            'web_id' => 's4w13',
            'fecha_recepcion' => \Carbon\Carbon::now(),
            'descripcion' => 'ACCION DE LIBERTAD',
            'procedimiento' => 'PENAL',
            'Materia' => 'PENAL',
            'nro_fojas' => 0,
            'juez_id' => 3,
            'juzgado_id' => 2,
            'tipo_proceso_id' => 4,
            'dmt_id' => 10,
            'dmd_id' => 11,
            'rep_dmt_id' => 6,
            'rep_dmd_id' => 7,
        ]);

        // Fojas



    }
}
