<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Alberte',
            'email'    => 'alberte@gmail.com',
            'password'   =>  'sol2022',
            // 'password'   =>  Hash::make('password'),
            'remember_token' =>  Str::random(10),
        ]);
    }

    // public function run()
    // {
    //     $user = [
    //         [
    //            'name'=>'Employee',
    //            'email'=>'employee@nicesnippets.com',
    //            'is_employee'=>'1',
    //            'password'=> bcrypt('123456'),
    //         ],
    //         [
    //            'name'=>'User',
    //            'email'=>'user@nicesnippets.com',
    //            'is_employee'=>'0',
    //            'password'=> bcrypt('123456'),
    //         ],
    //     ];
    //     foreach ($user as $key => $value) {
    //         User::create($value);
    //     }
    // }
}
