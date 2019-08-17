<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('roles')->insert([
            ['name' => 'admin', 'description' => 'An admin', 'permission' => config('seed.admin')],
            ['name' => 'user', 'description' =>'An user', 'permission' => config('seed.user')],
        ]);
    }
}
