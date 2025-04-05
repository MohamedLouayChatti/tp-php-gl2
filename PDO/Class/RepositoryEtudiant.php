<?php
include "Repository.php";

class RepositoryEtudiant extends Repository
{
    public function __construct()
    {
        parent::__construct('etudiants');
    }

    
}
?>