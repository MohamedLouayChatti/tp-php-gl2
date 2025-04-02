
<?php
class etudiant {
    public function __construct(
        public string $nom,
        public array $notes,
    ){}
    

    public function afficherNotes() {

        echo '<div class="card">';
        echo "<div class='card-header fw-bold'>{$this->nom}</div>";
        echo  '<ul class="list-group" id="gradesList">';

        foreach ($this->notes as $note) {
            $couleur = '';
            if ($note < 10) {
                $couleur = 'list-group-item-danger';
            } elseif ($note > 10) {
                $couleur = 'list-group-item-success';
            } else {
                $couleur = 'list-group-item-warning';
            }
            
            echo "<li class='list-group-item $couleur'>$note</li>";
        }

        echo '</ul>';
        echo "<div class='alert alert-info m-0 text-center' id='averageDisplay'>
        <span id='average'>{$this->afficherAdmis()}</span>
        </div>
        </div>
        ";
    }
    
    public function calculMoyenne(): float {
        if (count($this->notes) === 0) {
            return 0;
        }
        return array_sum($this->notes) / count($this->notes);
    }

    public function afficherAdmis(): string {
        if ($this->calculMoyenne() >= 10) {
            return "Admis avec une moyenne de " . $this->calculMoyenne() . "<br>";
        } else {
            return "Non admis avec une moyenne de " . $this->calculMoyenne() . "<br>";
        }
    }


}

?>