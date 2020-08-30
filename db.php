<?php
/**
 * Created by PhpStorm.
 * User: Dimitry
 * Date: 27.08.2020
 * Time: 17:56
 */

class db
{
    private $dbh = null;

    public $dsn = 'mysql:dbname=w3schools;host=127.0.0.1';
    public $user = 'root';
    public $password = '';

    public function __construct()
    {
        $this->dbh = new PDO($this->dsn, $this->user, $this->password);
    }

    public function insert($table, $attributes)
    {
        $keys = array_keys($attributes);
        $values = array_values($attributes);

        $keysStr = implode(',', $keys);
        $valuesStr = implode(',', $values);

        $query = "INSERT INTO {$table} ({$keysStr}) VALUES ({$valuesStr});";

        $this->dbh->exec($query);
    }

    public function count($table)
    {
        $query = "SELECT COUNT(*) cnt FROM {$table}";
        $sth = $this->dbh->query($query);
        return $sth->fetch()['cnt'];
    }
}