<?php

    $maggiorenne = $_POST['anni'];
    $residenza = $_POST['paese'];
    $identitadigitale = $_POST['id'];
    $valoreisee = $_POST['isee'];

    if (($maggiorenne >= 18)&&($residenza == "it")&&($identitadigitale == "SPID" || $identitadigitale == "CIE")&&($valoreisee > 25000)) {

        echo "<h1>Hai diritto ad uno sconto fino a €100 sul nuovo prodotto<h1>";

    } else if (($maggiorenne >= 18)&&($residenza == "it")&&($identitadigitale == "SPID" || $identitadigitale == "CIE")&&($valoreisee <= 25000)) {

        echo "<h1>Hai diritto ad uno sconto fino a €200 sul nuovo prodotto<h1>";

    } else {
        echo "<h1>Mi dispiace non hai diritto al bonus elettrodomestici</h1>";
    }

?>