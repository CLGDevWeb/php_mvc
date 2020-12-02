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
        return substr($this->content, 0, 300) . ' (...)';
    }

    public function getButton(): string
    {
        return <<<HTML
            <a href="/php_mvc/posts/$this->id" class="btn btn-primary float-right">Lire plus</a>
        HTML;
    }

    public function getTags()
    {
        return $this->query("
            SELECT t.* FROM tags t
            INNER JOIN post_tag pt ON pt.tag_id = t.id
            WHERE pt.post_id = ?
        ", [$this->id]);
    }

    public function create(array $data, ?array $relations = null)
    {
        parent::create($data);

        $id = $this->db->getPDO()->lastInsertId();

        foreach ($relations as $tagId) {
            $req = $this->db->getPDO()->prepare("INSERT post_tag (post_id, tag_id) VALUES (?, ?)");
            $req->execute([$id, $tagId]);
        }

        return true;
    }

    public function update(int $id, array $data, ?array $relations = null)
    {
        parent::update($id, $data);

        $req = $this->db->getPDO()->prepare("DELETE FROM post_tag WHERE post_id = ?");
        $result = $req->execute([$id]);

        foreach ($relations as $tagId) {
            $req = $this->db->getPDO()->prepare("INSERT post_tag (post_id, tag_id) VALUES (?, ?)");
            $req->execute([$id, $tagId]);
        }

        if ($result) {
            return true;
        }
    }
}