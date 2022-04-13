<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Post::factory(5)->create();
        // \App\Models\User::truncate();
        // Category ::truncate();
        // \App\Models\Post::truncate();
        
        
        // $user = \App\Models\User::factory()->create();

        //  $review = Category::create([
        //      'name'=> 'Review',
        //      'slug'=>'review'
        //  ]);
        //  $discussion = Category::create([
        //     'name'=> 'Discussion',
        //     'slug'=>'discussion'
        //  ]);
        //  $story = Category::create([
        //     'name'=> 'Story',
        //     'slug'=>'story'
        //  ]);
        //  \App\Models\Post::create([
        //      'user_id'=> $user->id,
        //      'category_id'=> $review->id,
        //     'title'=> 'The Phantom Menace',
        //     'slug'=>'the_phantom_menace',
        //     'excerpt'=>'Now this is pod racing!',
        //     'body'=>'<p>Now this is pod racing!Theres always a bigger fish!Ill try spinning, thats a good trick! Well watch over your career with great interest!</p>'
        //  ]);
        //  \App\Models\Post::create([
        //     'user_id'=> $user->id,
        //     'category_id'=> $discussion->id,
        //    'title'=> 'Attack of the Clones',
        //    'slug'=>'attack_of_the_clones',
        //    'excerpt'=>'I dont like sand. Its course, rough, and it gets everywhere',
        //    'body'=>'<p>I dont like sand. Its course, rough, and it gets everywhere. I dont mind flying, but what you are doing is suicide. Always on the move. Do you want buy some deathsticks! I hate it when he does that! You want to go home and rethink your life.</p>'
        // ]);
        // \App\Models\Post::create([
        //     'user_id'=> $user->id,
        //     'category_id'=> $story->id,
        //    'title'=> 'Revenge of the Sith',
        //    'slug'=>'revenge_of_the_sith',
        //    'excerpt'=>'This is where the fun begins',
        //    'body'=>'<p>This is where the fun begins! Ive been looking forward to this. My powers have doubled since the last time we met, Count. Good...Twice the pride, double the fall.</p>'
        // ]);
    }
}
