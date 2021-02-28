<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show index page
     * @return view
     */
    public function index()
    {
        $title = 'Blog';
        $posts_php = [
            [
                "title"=> 'Il mio primo post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'Il mio secondo post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'Il mio terzo post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'Il mio quarto post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'Il mio quinto post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'Il mio sesto post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'Il mio settimo post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'Il mio ottavo post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'Il mio nono post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'Il mio decimo post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            
        ];
        return view('welcome', compact('title', 'posts_php'));
    }

    /**
     * Show posts page
     * @return view
     */
    public function posts(Post $post)
    {
        $posts = $post->all();
        // dd($posts); 
        return view('posts', compact('posts'));
    }

    /**
     * Show contact page
     * @return view
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show about page
     * @return view
     */
    public function about()
    {
        return view('about');
    }
}
