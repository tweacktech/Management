<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\View;
use App\Models\Click;
use App\Models\DollarEarned;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        $users = User::where('is_admin', false)->get();
        $posts = Post::all();
        $views = View::all();
        $clicks = Click::all();
        $dollar_earned = DollarEarned::all();

       return view('admin-home')
                ->with('users', $users)
                ->with('posts', $posts)
                ->with('views', $views)
                ->with('clicks', $clicks)
                ->with('dollar_earned', $dollar_earned)
                ->with('views', $views);
    }
}
