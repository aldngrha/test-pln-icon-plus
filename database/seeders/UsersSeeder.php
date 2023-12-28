<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "email" => "superadmin@gmail.com",
            "name" => "Super Admin",
            "password" => bcrypt("superadmin1234"),
            "created_at" => now(),
            "roles" => "superadmin"
        ]);
    }
}
