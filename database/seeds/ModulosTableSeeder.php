<?php

use Illuminate\Database\Seeder;

class ModulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('ALTER TABLE modulos AUTO_INCREMENT = 1');

        DB::insert('insert into modulos (nombre) values (?)', ['usuarios']);
        DB::insert('insert into modulos (nombre) values (?)', ['modulos']);
        DB::insert('insert into modulos (nombre) values (?)', ['categorias_productos']);
        DB::insert('insert into modulos (nombre) values (?)', ['productos']);
    }
}
