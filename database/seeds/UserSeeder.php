<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin123'),
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'hagaitrg',
            'email' => 'hagaitrg@gmail.com',
            'password' => bcrypt('hagai123'),
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'paxillachairany',
            'email' => 'paxillapangaduan@gmail.com',
            'password' => bcrypt('paxilla123'),
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'jtamariska',
            'email' => 'jiletamariska@gmail.com',
            'password' => bcrypt('jile123'),
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'lanangbp',
            'email' => 'bplanang@gmail.com',
            'password' => bcrypt('nganal123'),
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'rafli',
            'email' => 'Rafliakbar1206@gmail.com',
            'password' => bcrypt('rafli123'),
            'role_id' => 1
        ]);

    }
}
