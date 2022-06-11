<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create(
            [
                'name'                  => 'Admin',
                'email'                 => 'admin@admin.com',
                'email_verified_at'     => Carbon:: now(),
                'password'              => bcrypt('password'),
                'remember_token'        => null,
            ]
        );
    }
}
