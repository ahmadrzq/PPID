<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DokumenTableSeeder::class,
            PermohonanTableSeeder::class,
            DinasTableSeeder::class,
            JenisTableSeeder::class,
            ProvinsiTableSeeder::class,
            StatusDokumenTableSeeder::class,
            TipeTableSeeder::class,
            KategoriTableSeeder::class
        ]);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
