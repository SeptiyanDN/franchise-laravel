<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'name' => 'Super Admin',
                'username' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('superadmin'),
                'role_id' => 1,
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'role_id' => 2,
            ],
            [
                'name' => 'Pemilik Bisnis',
                'username' => 'pemilikbisnis',
                'email' => 'pemilikbisnis@gmail.com',
                'password' => bcrypt('pemilikbisnis'),
                'role_id' => 3,
            ],
            [
                'name' => 'Supervisor Bisnis',
                'username' => 'supervisorbisnis',
                'email' => 'supervisorbisnis@gmail.com',
                'password' => bcrypt('supervisorbisnis'),
                'role_id' => 4,
            ],
            [
                'name' => 'Kasir',
                'username' => 'kasir',
                'email' => 'kasir@gmail.com',
                'password' => bcrypt('kasir'),
                'role_id' => 5,
            ],
        ];
        foreach($data as $value) {
            User::insert([
                'name' => $value['name'],
                'username' => $value['username'],
                'email' => $value['email'],
                'password' => $value['password'],
                'role_id' => $value['role_id'],
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
