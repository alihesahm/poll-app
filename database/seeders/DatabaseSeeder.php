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
            'job_number' => '0000',
            'type' => UserTypeEnum::ADMIN
        ]);

        User::factory()->create([
            'job_number' => '1111',
            'type' => UserTypeEnum::USER
        ]);

    }
}
