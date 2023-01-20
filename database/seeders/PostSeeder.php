<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $post_title = Post::where('title','First Post')->first();
        $post_user_1 = User::where('is_admin', false)->first();

        if (empty($title) && !empty($post_user_1)) {
           $post_1 = new Post;
           $post_1->user_id = $post_user_1->id;
           $post_1->title = 'First Post';
           $post_1->content = 'First Post content First Post content First Post content';
           $post_1->save();
        }
        


        $post_user_2 = User::where('is_admin', false)->first();
        $title=Post::where('title','Second Post')->first();

        if (empty($title) && !empty($post_user_2)) {
           $post_2 = new Post;
           $post_2->user_id = $post_user_2->id;
           $post_2->title = 'Second Post';
           $post_2->content = 'Second Post content Second Post content Second Post content ';
           $post_2->save();
        }
    }
}
