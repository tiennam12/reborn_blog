<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            ['fullname' => 'admin', 'nickname' => 'admin', 'email' => 'admin@example.com', 'password' => bcrypt('123456'), 'role_id' => config('seed.admin')],
            ['fullname' => 'user', 'nickname' => 'user', 'email' => 'user@example.com', 'password' => bcrypt('123456'), 'role_id' => config('seed.user')],
        ]);
    }
}
