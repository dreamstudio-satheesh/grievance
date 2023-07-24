<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@app.com',
            'password' => 'password',
            'mobile_number' => '912456780',
            'email_verified_at'=>'2022-01-02 17:04:58',
            'avatar' => 'avatar-1.jpg',
            'created_at' => now(),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@app.com',
            'password' => 'password',
            'mobile_number' => '912456781',
            'avatar' => 'avatar-2.jpg',
        ]);
        $user->assignRole('user');
    }
}
