<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_CalculIMC extends Vue_Composant
{
    private string $msgErreur;

    public function __construct(string $msgErreur = "")
    {
        $this->msgErreur = $msgErreur;
    }

    function donneTexte(): string
    {
        $str = "
<h1>Calculer votre IMC</h1>
<form action='?case=IMC&action=IMC' method='post' >
    <div>
        <label for='taille'>Entrez votre taille : </label>
        <input type='number' step='0.01' name='taille' required />
    </div>
    <div>
        <label for='poids'>Entrez votre poids : </label>
        <input type='number' step='0.01' name='poids' required />
    </div>
    <button type='submit'>Calculer</button>
</form>
 
        $this->msgErreur
    ";
        return $str;
    }
}