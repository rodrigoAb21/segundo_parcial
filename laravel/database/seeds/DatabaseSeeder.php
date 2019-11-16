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
            'nro_fojas' => 3,
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
            'nro_fojas' => 1,
            'juez_id' => 3,
            'juzgado_id' => 2,
            'tipo_proceso_id' => 4,
            'dmt_id' => 10,
            'dmd_id' => 11,
            'rep_dmt_id' => 6,
            'rep_dmd_id' => 7,
        ]);

        // Fojas

        DB::table('foja')->insert([
            'descripcion' => 'Lorem parte 1',
            'fecha' => \Carbon\Carbon::now(),
            'tipo' => 'Documento',
            'src' => 'docs',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque justo velit, at luctus tellus consectetur at. Phasellus urna dolor, venenatis ut consequat id, placerat sit amet erat. Praesent nec tempus purus, ac pulvinar purus. Duis eu maximus neque, id ornare risus. Donec viverra metus sit amet scelerisque congue. Mauris nec neque bibendum, imperdiet tellus ut, iaculis nunc. Praesent sollicitudin leo ac velit elementum, non facilisis neque condimentum. Maecenas luctus laoreet est, ut laoreet purus. Nam aliquam dolor vitae ante sodales, eget fringilla ipsum facilisis. Nulla pulvinar in libero vitae porta. Proin euismod libero ac massa pretium rhoncus. Proin sed tincidunt velit. Proin pulvinar nunc ac orci tincidunt, quis suscipit mauris viverra. In lobortis tempor pretium.',
            'expediente_id' => 1,
        ]);

        DB::table('foja')->insert([
            'descripcion' => 'Lorem parte 2',
            'fecha' => \Carbon\Carbon::now(),
            'tipo' => 'Documento',
            'src' => 'docs',
            'contenido' => 'Curabitur vel auctor nisl, sit amet facilisis ipsum. Nulla consectetur mi id felis venenatis ultricies. Sed elementum orci vel justo lacinia, at posuere dui tristique. Mauris risus ante, sagittis ut malesuada a, facilisis sit amet sem. Ut eget odio metus. Vestibulum lorem quam, fringilla eu euismod a, consequat non velit. Donec et lacus at tortor suscipit ullamcorper. Nulla facilisi. Nulla tristique ut nibh sit amet laoreet. Ut sit amet convallis diam. Sed non eros et libero vehicula vehicula eu vitae tortor.',
            'expediente_id' => 1,
        ]);



        DB::table('foja')->insert([
            'descripcion' => 'Lorem parte 3',
            'fecha' => \Carbon\Carbon::now(),
            'tipo' => 'Documento',
            'src' => 'docs',
            'contenido' => 'Etiam convallis, elit eu posuere tincidunt, risus est eleifend sem, a mattis turpis quam lobortis ante. Fusce vel nibh ut diam finibus viverra. Nunc ac massa ut tortor sollicitudin consectetur. Sed consectetur sapien nec malesuada suscipit. Phasellus tempor finibus velit, sit amet eleifend nisi imperdiet a. Donec ornare eros eget neque porttitor, a bibendum ipsum convallis. Donec in ipsum nec libero hendrerit ultrices at eu erat. Donec eget lobortis turpis. Nulla convallis ligula vel tortor aliquam, eu tempor ante mollis. Curabitur at luctus sapien, vitae imperdiet nisl. Vestibulum placerat, urna et porta mollis, nisi arcu ullamcorper augue, vel elementum est enim sed tortor. Proin vestibulum augue eget porttitor ultricies. Nunc eget pellentesque arcu.',
            'expediente_id' => 1,
        ]);

        DB::table('foja')->insert([
            'descripcion' => 'Lorem Completo',
            'fecha' => \Carbon\Carbon::now(),
            'tipo' => 'Documento',
            'src' => 'docs',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rhoncus elementum urna vel aliquet. Donec eu magna nec libero euismod egestas sed et diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce mattis placerat lectus non sollicitudin. Sed non purus porta, pulvinar nunc nec, fringilla erat. Pellentesque felis felis, molestie vitae odio ac, fermentum fermentum odio. Aliquam pharetra sed eros at ultricies. Etiam ac orci a magna feugiat ultricies.

Nam gravida velit velit, et eleifend velit efficitur et. Phasellus ut suscipit justo, sit amet posuere tellus. Proin molestie justo sem, id fermentum ipsum interdum nec. Nunc porttitor ante erat, ac blandit tortor blandit in. Aliquam at metus arcu. Nam iaculis libero lorem. Sed et vulputate mi. Morbi efficitur eros eu nulla vehicula, vel congue enim ornare. Phasellus eu massa finibus, tincidunt elit nec, lacinia nisl. Donec nec maximus arcu. In hac habitasse platea dictumst. Mauris ullamcorper mauris quis lacus posuere pretium. Curabitur scelerisque, urna condimentum tempor fermentum, quam dolor elementum mi, ac finibus neque metus in sapien. Praesent finibus lobortis elit, id ultrices eros auctor sit amet. Vivamus laoreet lorem sit amet est porttitor, ac ornare felis facilisis. Duis rutrum ullamcorper ante, sit amet porttitor neque luctus nec.

Cras rhoncus velit a leo tristique, pulvinar egestas dui consectetur. Phasellus sed purus sed magna interdum rutrum. Donec vel volutpat ligula. Proin et venenatis magna. In at nisl eros. Pellentesque lobortis mattis urna, tempor ultrices nibh congue eget. Nunc ultricies dui vel neque auctor, eget consectetur purus feugiat. Proin sagittis venenatis nisi, vel tincidunt ligula elementum ut. Vestibulum mollis ipsum finibus tristique aliquam. Nunc nec consectetur nisi. Ut a congue turpis, eu ornare est.',
            'expediente_id' => 2,
        ]);


    }
}
