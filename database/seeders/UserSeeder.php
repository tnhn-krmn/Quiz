<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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

        
        User::insert([

            'name' => 'Tunahan KARAMAN',
            'email' => 'tnhnkrmn5@gmail.com',
            'email_verified_at' => now(),
            'type' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

        ]);
        
        \App\Models\User::factory(5)->create();
    }
}
