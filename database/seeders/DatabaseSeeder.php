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
        User::factory(10)->create();
        Post::factory(10)->create();
        Command::factory(10)->create();

        foreach (range(1,10) as $user_id){
            foreach(range(1,10) as $post_id){
                foreach(range(1,10) as $command_id) {
                    if ($post_id % 2 === 0) {
                        Vote::factory()->create([
                            'user_id' => $user_id,
                            'post_id' => $post_id,
                            'command_id' => $command_id,
                        ]);
                    }
                }
            }
        }
    }
}
