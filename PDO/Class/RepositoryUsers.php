<?php

class RepositoryUsers extends Repository
{
    public function __construct()
    {
        parent::__construct('users');
    }
    public function findByEmail($email)
    {
        $query = "SELECT * from {$this->tableName} where email = :email";
        $response = $this->db->prepare($query);
        $response->execute(['email' => $email]);
        return $response->fetch(PDO::FETCH_OBJ);
    }

    
}
?>