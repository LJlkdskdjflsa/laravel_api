<?php

namespace Database\Seeders;


use App\Models\Command;
use App\Models\Post;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //test user
        User::factory()->create(
            [
                'name' => 'test',
                'email' => 'test@gmail.com',
                'password' => '$2y$10$n2sJFj0N7YpfYsB8/dBALuYAHpRudzQ0d3jV8GnknlkverRBRnsWy', // password
            ]
        );

        User::factory(10)->create();
        Post::factory(10)->create();
        //first command
        for ($post = 1;$post <= 10;$post += 1){
            Command::create([
                'user_id' => 1,
                'post_id' => $post,
                'content' => null,
                'likes'=>0,
                'dislikes'=>0,
            ]);
        }

        Command::factory(100)->create();


        foreach (range(1,10) as $user_id){
            foreach(range(1,10) as $post_id){
                foreach(range(1,100) as $command_id) {
                    if ($post_id % 2 === 0) {
                        Vote::factory()->create([
                            'user_id' => $user_id,
                            'post_id' => $post_id,
                            'command_id' => $command_id,
                        ]);
                    }else{
                        Vote::factory()->create([
                            'user_id' => $user_id,
                            'post_id' => $post_id,
                            'command_id' => null,
                        ]);
                    }
                }
            }
        }
    }
}
