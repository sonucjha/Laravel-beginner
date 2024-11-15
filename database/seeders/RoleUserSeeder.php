<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    public function run()
    {
        $records = [
            ['user_id' => 1, 'role_id' => 1],
            ['user_id' => 1, 'role_id' => 2],
            ['user_id' => 2, 'role_id' => 1],
            ['user_id' => 2, 'role_id' => 3],
            ['user_id' => 3, 'role_id' => 2],
            ['user_id' => 3, 'role_id' => 3],
            ['user_id' => 4, 'role_id' => 1],
            ['user_id' => 4, 'role_id' => 2],
            ['user_id' => 5, 'role_id' => 3],
            ['user_id' => 5, 'role_id' => 1],
        ];

        foreach ($records as $record) {
            DB::table('role_user')->insert([
                'user_id' => $record['user_id'],
                'role_id' => $record['role_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
