<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Mahasiswa',
            'description' => 'Mahasiswa',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'Dosen',
            'description' => 'Dosen',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'Admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
