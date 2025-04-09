<?php

class RepositorySection extends Repository
{
    public function __construct()
    {
        parent::__construct('section');
    }

    public function findStudents($sectionID)
    {
        $query = "SELECT * from etudiant E, section S where S.id = :id AND S.designation = E.section";
        $response = $this->db->prepare($query);
        $response->execute(['id' => $sectionID]);
        return $response->fetchAll(PDO::FETCH_OBJ);
    }
}
?>