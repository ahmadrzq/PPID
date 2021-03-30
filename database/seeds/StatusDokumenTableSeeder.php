<?php

use Illuminate\Database\Seeder;

class StatusDokumenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\StatusDokumen::create([
            'nama' => "Draft"
        ]);

        \App\StatusDokumen::create([
            'nama' => "Terbit"
        ]);
    }
}
