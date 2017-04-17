<?php

namespace App;

use App\Exceptions\DbException;

class Db
{

    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        try {
            $this->dbh = new \PDO('mysql:host=localhost;dbname=php2', 'root', '');
        } catch (\PDOException $e) {
            throw new DbException($e->getMessage());
        }
    }

    public function query(string $sql, string $class = \stdClass::class, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if ($res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        } else {
            throw new DbException('Query error');
        }
    }

    public function execute(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

}