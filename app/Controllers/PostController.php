<?php

namespace App\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function home()
    {
        return $this->view('posts.home');
    }
    
    public function index()
    {
        $posts = (new Post($this->getDB()))->all();

        return $this->view('posts.index', compact('posts'));
    }

    public function show(int $id)
    {
        $post = (new Post($this->getDB()))->findById($id);
        
        return $this->view('posts.show', compact('post'));
    }
}