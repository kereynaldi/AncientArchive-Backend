<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::create([
        'NIP' => '00011002',
        'name' => 'Kevin Reynaldi',
        'email' => 's.kevinreynaldi@gmail.com',
        'password' => '12345678',
        'jabatan' => 'Pegawai',
        'no_telp' => '08121223778',
      ]);
      $user->save();
    }
}
