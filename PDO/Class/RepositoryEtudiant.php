<?php

class RepositoryEtudiant extends Repository
{
    public function __construct()
    {
        parent::__construct('etudiant');
    }

    public function update($id, $params)
    {
        $setString = implode(', ', array_map(fn($key) => "$key = ?", array_keys($params)));
        $query = "UPDATE {$this->tableName} SET $setString WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([...array_values($params), $id]);
    }

}
?>