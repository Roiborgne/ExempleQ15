<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_CalculOrage extends Vue_Composant
{
    private string $msgErreur;

    public function __construct(string $msgErreur = "")
    {
        $this->msgErreur = $msgErreur;
    }

    function donneTexte(): string
    {
        $str = "
<h1>Calculer le distance de l'orage</h1>
<form action='?case=Orage&action=Orage' method='post' >
    <div>
        <label for='temps'>Entrez le temps entre l'éclair et le son : </label>
        <input type='number' name='temps' required />
    </div>
    <button type='submit'>Calculer</button>
</form>
 
        $this->msgErreur
    ";
        return $str;
    }

}