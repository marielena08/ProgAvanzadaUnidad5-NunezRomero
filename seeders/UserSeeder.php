<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user =new User();

        $user->name = "marielena";
        $user->lastname = "nuñez";
        $user->email = "mari@gmail.com";
        $user->password = "123";

        $user->save();

        User::factory(5)->create();
    }
}
