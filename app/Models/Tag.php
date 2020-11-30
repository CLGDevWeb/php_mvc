<?php

namespace App\Models;

use DateTime;

class Tag extends Model
{
    protected $table = 'tags';

    public function getCreatedAt(): string
    {
        return (new DateTime($this->created_at))->format('d/m/Y à H:i');
    }

    public function getPosts()
    {
        return $this->query("
            SELECT p.* FROM posts p
            INNER JOIN post_tag pt ON pt.post_id = p.id
            WHERE pt.tag_id = ?
        ", [$this->id]);
    }
}