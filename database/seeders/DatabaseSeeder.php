<?php

namespace Database\Seeders;

use App\Enums\UserTypeEnum;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'admin@admin.com',
            'type' => UserTypeEnum::ADMIN
        ]);

        User::factory()->create([
            'email' => 'user@user.com',
            'type' => UserTypeEnum::USER
        ]);

    }
}
