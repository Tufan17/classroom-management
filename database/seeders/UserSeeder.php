<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        User::create([
            'name' => 'super',
            'surname'=>'admin',
            'email' => 'super@admin.com',
            'password' => Hash::make('123456Kc'),
            'email_verified_at' => '2021-01-01 00:00:00',
            'role_id' => 1
        ]);

        User::create([
            'name' => 'teacher',
            'surname'=>'teacher',
            'email' => 'teacher@admin.com',
            'password' => Hash::make('123456Kc'),
            'email_verified_at' => '2021-01-01 00:00:00',
            'role_id' => 2,
        ]);
        User::create([
            'name' => 'user',
            'surname'=>'user',
            'email' => 'user@user.com',
            'password' => Hash::make('123456Kc'),
            'email_verified_at' => '2021-01-01 00:00:00',
            'role_id' => 3,
        ]);
    }
}
