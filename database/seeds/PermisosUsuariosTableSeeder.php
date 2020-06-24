<?php

use Illuminate\Database\Seeder;

class PermisosUsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('ALTER TABLE permisos_usuarios AUTO_INCREMENT = 1');

        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [1, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [2, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [3, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [4, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [5, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [6, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [7, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [8, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [9, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [10, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [11, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [12, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [13, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [14, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [15, 1]);
        DB::insert('insert into permisos_usuarios (permiso_id, usuario_id) values (?, ?)', [16, 1]);
    }
}
