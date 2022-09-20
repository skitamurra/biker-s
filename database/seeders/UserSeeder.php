<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create
        ([
            'name' => 'test user1',
            'email' => 'test1@example.com',
            'password' => 'test1',
        ]);
        
         User::create
        ([
            'name' => 'test user2',
            'email' => 'test2@example.com',
            'password' => 'test2',
        ]);
        
         User::create
        ([
            'name' => 'test user3',
            'email' => 'test3@example.com',
            'password' => 'test3',
        ]);
    }
}
