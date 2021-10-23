<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Walter Laura Soto',
            'email' => 'waltels2019@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    $user->assignRole('Admin');
    
    User::factory(10)->create();
    }
}
