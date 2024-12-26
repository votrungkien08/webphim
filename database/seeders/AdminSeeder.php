<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Kiên nè',
            'email' => 'kiendzsh1@gmail.com', // Email đăng nhập
            'password' => Hash::make('123456'), // Mã hóa mật khẩu
        ]);
    }
}
