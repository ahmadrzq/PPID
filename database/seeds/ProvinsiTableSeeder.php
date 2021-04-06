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
            'nama' => "Kecamatan Mayangan"
        ]);
        
        \App\Provinsi::create([
            'nama' => "Kecamatan Wonoasih"
        ]);
        
        \App\Provinsi::create([
            'nama' => "Kecamatan Kademangan"
        ]);
        
        \App\Provinsi::create([
            'nama' => "	Kecamatan Kedopok"
        ]);
        
        \App\Provinsi::create([
            'nama' => "Kecamatan Kanigaran"
        ]);
    }
}
