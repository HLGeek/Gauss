<?php

namespace Core;
USE PDO;
class Database
{
    private $con;
    const DB_DSN = 'mysql:host=localhost;dbname=Gauss';
    const DB_USER = 'root';
    const DB_PASS = '';

    public function getConnexion()
    {
        if ($this->con == null)
        {
            $this->con = new PDO(self::DB_DSN,self::DB_USER,self::DB_PASS);
        }
        return $this->con;
    }

    public function exec($statement)
    {
        $exec = $this->getConnexion()->exec($statement);
        return $exec;
    }

    public function prepare($statement,$data)
    {
        $res = $this->getConnexion()->prepare($statement);
        $res->execute([$data]);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}