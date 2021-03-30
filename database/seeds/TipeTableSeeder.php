<?php

use Illuminate\Database\Seeder;

class TipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Tipe::create([
            'nama' => "Audio"
        ]);

        \App\Tipe::create([
            'nama' => "Video"
        ]);

        \App\Tipe::create([
            'nama' => "Teks"
        ]);
    }
}
