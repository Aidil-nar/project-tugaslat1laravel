<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateTestUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cek apakah user test sudah ada
        if (!User::where('email', 'test@example.com')->exists()) {
            User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('password123'),
            ]);
            
            echo "✓ Test user berhasil dibuat\n";
            echo "Email: test@example.com\n";
            echo "Password: password123\n";
        } else {
            echo "✓ Test user sudah ada\n";
        }
    }
}
