<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $users = collect([
        [
            'name' => 'Yahoo Baba',
            'email' => 'yahoobaba@gmail.com',
            'c_id'=>1

        ],
        [
            'name' => 'Salman Khan',
            'email' => 'salman@gmail.com',
            'c_id'=>1

        ],
        [
            'name' => 'Amitabh Bachan',
            'email' => 'amitabh@gmail.com',
            'c_id'=>1

        ]
    ]);
    $users->each(function($users){
        user::insert($users);
    });
}

        // public function run(): void
        // {
        //     User::create([
        //         'name'=>'Abdullah',
        //         'email'=>'Abdullah@gmail.com',
        //         'c_id'=>1
        //     ]);
        // }
}
