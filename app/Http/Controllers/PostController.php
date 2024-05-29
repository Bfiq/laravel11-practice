<?php 

namespace App\Http\Controllers;

class PostController
{
    public function index() //usable para un solo metodo
    {
        $posts = [
            ['title' => 'post #1'],
            ['title' => 'post #2'],
            ['title' => 'post #3'],
            ['title' => 'post #4'],
        ];

        return view('blog', ['posts' => $posts]);
    }
}
