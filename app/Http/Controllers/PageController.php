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
        $posts = [
            [
                "title"=> 'My first post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'My first post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'My first post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'My first post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'My first post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'My first post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'My first post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'My first post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'My first post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            [
                "title"=> 'My first post',
                "description"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptas aperiam enim expedita animi quaerat quas exercitationem accusamus necessitatibus illum cum hic, dicta soluta at perspiciatis quidem maiores dolore eaque."
            ],
            
        ];
        return view('welcome', compact('title', 'posts'));
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
