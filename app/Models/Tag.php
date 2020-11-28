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
}