<?php

use Illuminate\Database\Seeder;

class JenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Jenis::create([
            'nama' => "Profil Badan Publik"
        ]);

        \App\Jenis::create([
            'nama' => "Profil 2"
        ]);

        \App\Jenis::create([
            'nama' => "Profil 3"
        ]);
    }
}
