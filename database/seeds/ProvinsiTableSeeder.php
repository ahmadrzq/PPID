<?php

use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Provinsi::create([
            'nama' => "Jawa Timur"
        ]);

        \App\Provinsi::create([
            'nama' => "Jawa Barat"
        ]);

        \App\Provinsi::create([
            'nama' => "Jawa Tengah"
        ]);
    }
}
