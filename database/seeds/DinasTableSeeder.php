<?php

use Illuminate\Database\Seeder;

class DinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Dinas::create([
            'nama' => "PPID Kota"
        ]);

        \App\Dinas::create([
            'nama' => "Kominfo"
        ]);

        \App\Dinas::create([
            'nama' => "Kemenag"
        ]);
    }
}
