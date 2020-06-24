<?php

use Illuminate\Database\Seeder;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('ALTER TABLE permisos AUTO_INCREMENT = 1');

        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['ver', 1]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['crear', 1]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['editar', 1]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['eliminar', 1]);

        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['ver', 2]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['crear', 2]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['editar', 2]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['eliminar', 2]);

        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['ver', 3]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['crear', 3]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['editar', 3]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['eliminar', 3]);

        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['ver', 4]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['crear', 4]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['editar', 4]);
        DB::insert('insert into permisos (nombre, modulo_id) values (?, ?)', ['eliminar', 4]);
    }
}
