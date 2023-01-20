<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\View;
use App\Models\Post;
use App\Models\User;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

$Add_views=new View;
$Post=Post::first();
$Add_views->post_id=$Post->id;
$Add_views->user_id=null;
$Add_views->user_device='12.9.3.2';
$Add_views->save();
    }
}
