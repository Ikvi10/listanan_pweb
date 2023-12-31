<?php

namespace Database\Seeders;

use App\Models\User;
Use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'saya',
            'email' => 'saya@gmail.com',
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(60),
        ]);
    }
}
