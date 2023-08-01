<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\NguoiDung::create(['nd_ten' => 'Quản trị viên']);
        \App\Models\NguoiDung::create(['nd_ten' => 'Thủ kho']);
        \App\Models\NguoiDung::create(['nd_ten' => 'Nhân viên']);
        \App\Models\NguoiDung::create(['nd_ten' => 'Ban lãnh đạo']);
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(1)->create(['role' => 1]);
        \App\Models\User::factory(3)->create(['role' => 2]);
        \App\Models\User::factory(5)->create(['role' => 3]);
        \App\Models\User::factory(3)->create(['role' => 4]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
