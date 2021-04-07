<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name' , 'admin')->first();
        $petugasRole = Role::where('name' , 'petugas')->first();
        $userRole = Role::where('name' , 'user')->first();

        $admin = User::create([
            'name' => 'Rizqi',
            'email' => 'rizqi@gmail.com',
            'telepon' => '0192371231',
            'alamat' => 'Jl Raya Kuripan',
            'password' => bcrypt('admin'),
            'nik' => '12312312381637',
            'telepon' => '',
            'pos' => '',
            'kota' => '',
            'alamat' => '',
            'tanggalLahir' => Carbon::now()->toDateTimeString(),
            'tempatLahir' => '',
            'jenisKelamin' => '',
        ]);
        $petugas = User::create([
            'name' => 'Ferry',
            'email' => 'ferry@gmail.com',
            'telepon' => '1283612631',
            'alamat' => 'Jl Raya Kuripan',
            'password' => bcrypt('petugas'),
            'nik' => '19241948198414',
            'telepon' => '',
            'pos' => '',
            'kota' => '',
            'alamat' => '',
            'tanggalLahir' => Carbon::now()->toDateTimeString(),
            'tempatLahir' => '',
            'jenisKelamin' => '',
        ]);
        $user = User::create([
            'name' => 'Amin',
            'email' => 'amin@gmail.com',
            'telepon' => '12831231312',
            'alamat' => 'Jl Raya Kuripan',
            'password' => bcrypt('user'),
            'nik' => '124141412414134',
            'telepon' => '',
            'pos' => '',
            'kota' => '',
            'alamat' => '',
            'tanggalLahir' => Carbon::now()->toDateTimeString(),
            'tempatLahir' => '',
            'jenisKelamin' => '',
        ]);

        $admin->roles()->attach($adminRole);
        $petugas->roles()->attach($petugasRole);
        $user->roles()->attach($userRole);

        factory(App\User::class,3)->create();

    }
}
