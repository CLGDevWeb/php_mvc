<?php

namespace App\Models;

use DateTime;

class Post extends Model
{
    protected $table = 'posts';

    public function getCreatedAt(): string
    {
        return (new DateTime($this->created_at))->format('d/m/Y à H:i');
    }

    public function getExcerpt(): string
    {
        return substr($this->content, 0, 300) . ' ...';
    }

    public function getButton(): string
    {
        return <<<HTML
            <a href="/cours_php_poo_nord_coders/posts/$this->id" class="btn btn-primary">Lire plus</a>
        HTML;
    }

    public function getTags()
    {
        return $tags;
    }
}