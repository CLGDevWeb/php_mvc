<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = (new Post($this->getDB()))->all();

        return $this->view('admin.posts.index', compact('posts'));
    }

    public function destroy(int $id)
    {
        $post = (new Post($this->getDB()))->findById($id);
        $result = $post->destroy($id);

        if($result) {
            return header('Location: /php_mvc/admin/posts');
        }
    }
}