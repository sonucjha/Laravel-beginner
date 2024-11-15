<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            ['user_id' => 1, 'bio' => 'Bio for user 1', 'phone' => '1234567890', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'bio' => 'Bio for user 2', 'phone' => '2345678901', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'bio' => 'Bio for user 3', 'phone' => '3456789012', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 4, 'bio' => 'Bio for user 4', 'phone' => '4567890123', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 5, 'bio' => 'Bio for user 5', 'phone' => '5678901234', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 6, 'bio' => 'Bio for user 6', 'phone' => '6789012345', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 7, 'bio' => 'Bio for user 7', 'phone' => '7890123456', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 8, 'bio' => 'Bio for user 8', 'phone' => '8901234567', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 9, 'bio' => 'Bio for user 9', 'phone' => '9012345678', 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 10, 'bio' => 'Bio for user 10', 'phone' => '0123456789', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('profiles')->insert($profiles);
    }
}
