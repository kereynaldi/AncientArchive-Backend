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
        'NIP' => '88888889',
        'name' => 'Monkey D. Garp',
        'email' => 'garp@gmail.com',
        'password' => Hash::make('godblessindonesia'),
        'jabatan' => 'Vice Admiral',
        'no_telp' => '08121223778',
      ]);
      $user->assignRole('user');
      $user->save();
    }
}
