<?php

namespace App\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function show(int $id)
    {
        $tag = (new Tag($this->getDB()))->findById($id);
        
        return $this->view('posts.tags.show', compact('tag'));
    }
}