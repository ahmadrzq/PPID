<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PermohonanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Permohonan::create([
            'user_id' => 5,
            'provinsi_id' => 1,
            'nama' => 'dina',
            'kode' => '12212321',
            'nik' => '1433543',
            'dinas_id' => '1',
            'jenisKelamin' => 'Perempuan',
            'judul' => 'Laporan Pegawai',
            'tempatLahir' => 'Prob',
            'tanggalLahir' => Carbon::parse('2000-01-01'),
            'alamat' => 'jl. mastrip',
            'tujuanInformasi' => 'Kemendagri',
            'kota' => 'Prob',
            'pos' => '62727',
            'telepon' => '08282737237',                        
        ]);
    }
}
