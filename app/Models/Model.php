<?php

namespace App\Models;

use Database\DBConnection;
use PDO;

abstract class Model
{
    protected $db;
    protected $table;

    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }

    public function all(): array
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY created_at DESC");
    }

    public function findById(int $id): Model
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", $id, true);
    }

    /**
     * @param $sql an SQL request
     * @param $param an id for findById() method
     * @param $single a boolean if it's prepare request, like findById() method
     */
    public function query(string $sql, int $param = null, bool $single = null)
    {
        $method = is_null($param) ? 'query' : 'prepare';

        if (strpos($sql, 'DELETE') === 0 || strpos($sql, 'UPDATE') === 0 || strpos($sql, 'CREATE') === 0) {
            $req = $this->db->getPDO()->$method($sql);
            $req->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
        
            return $req->execute([$param]);
        }

        $fetch = is_null($single) ? 'fetchAll' : 'fetch';
        
        $req = $this->db->getPDO()->$method($sql);
        $req->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

        if ($method === 'query') {
            return $req->$fetch();
        }

        $req->execute([$param]);
        return $req->$fetch();
    }

    public function destroy(int $id): bool
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", $id);
    }
}