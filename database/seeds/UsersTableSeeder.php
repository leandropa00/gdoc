<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');

        User::create([
            'name' => 'Admin',
            'email' => 'admin',
            'password' => Hash::make('12345678')
        ]);
    }
}
