<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Click;
use App\Models\Post;


class ClickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Add_clicks=new Click;
        $pos=Post::first();
        $Add_clicks->post_id=$pos->id;
        $Add_clicks->user_id=null;
        $Add_clicks->user_device="225535";
        $Add_clicks->save();
        //
    }
}
