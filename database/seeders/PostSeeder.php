<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::create
        ([
            'body' => 'test1',
            'user_id' => '1'
        ]);
        
        Post::create
        ([
            'body' => 'test2',
            'user_id' => '2'
        ]);
        
        Post::create
        ([
            'body' => 'test3',
            'user_id' => '3'
        ]);
    }
}
