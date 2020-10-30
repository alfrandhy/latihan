<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'judul' => 'Mastering Framework Laravel',
            'deskripsi' => 'Buku bagi pemula yang ingin belajar Framework PHP Laravel dari dasar', 
        ]);
        DB::table('books')->insert([
            'judul' => 'Laravel Untuk PEmula',
            'deskripsi' => 'Buku yang mengajarkan Framework Laravel dari awal', 
        ]);
    }
}
