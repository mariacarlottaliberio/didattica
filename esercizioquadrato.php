<?php

  function perimetro($lato){
    $perimetro = $lato * 4;
    return $perimetro; 
  }

  //echo "<p>Il perimetro del quadrato è " . perimetro($_POST["latoperimetro"]) . " cm</p>";

  function area($lato){
    $area =  pow($lato, 2);
    return $area; 
  }

  //echo "<p>L'area del quadrato è " . area($_POST["latoarea"]) . " cm²</p>";


  if (isset($_POST["azione"])) {
    if ($_POST["azione"] == "perimetro") {
        echo "<p>Il perimetro del quadrato è " . perimetro($_POST["latoperimetro"]) . " cm</p>";
    }

    if ($_POST["azione"] == "area") {
        echo "<p>L'area del quadrato è " . area($_POST["latoarea"]) . " cm²</p>";
    }

  }

?>