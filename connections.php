<?php
class Database
{
    public $db;
    public function  __construct()
    {
    try{
        $this->db = new PDO
        (
            'mysql:host=127.0.0.1;dbname=Registration_Users',
            'dckap',
            'Dckap2023Ecommerce'
        );
    }catch (Exception $e)
    {
        die("connection errors".$e->getMessage());
    }

    }
    public function query($query){
        $statement   = $this->db->prepare($query);
        $statement->execute($statement);
        return $statement;
    }
}
