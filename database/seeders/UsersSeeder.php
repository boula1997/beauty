<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $fullname= ["Ibrahim Ahmed","Mohamed Ali",];
        $email = ["ibrahimsamy308@gmail.com","Kero@gmail.com",];
        $pass = ["123456789","123456789",];
        $phone = ["01126785910","01126985910",];
        for ($i = 0; $i < 2; $i++) {
            $user = User::create([
                    'fullname' => $fullname[$i],
                    'email' => $email[$i],
                    'phone' => $phone[$i],
                    'password' =>Hash::make($pass[$i]),
            ]);
        }
    }
}