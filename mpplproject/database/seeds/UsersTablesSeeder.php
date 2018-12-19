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
        'NIP' => '00011000',
        'name' => 'John Smith',
        'email' => 'john_smith@gmail.com',
        'password' => Hash::make('password'),
        'jabatan' => 'Pegawai',
        'no_telp' => '08121223778',
      ]);
      $user->assignRole('admin');
      $user->save();
    }
}
