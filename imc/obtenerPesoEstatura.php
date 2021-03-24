<?php

    $valor1=$_POST['peso'];
    $valor2=$_POST['estatura'];
    

    $imc;

    
    
    $imc= $valor1 / ($valor2*$valor2);

    $imc=round($imc,3);

    if ($imc>1 and $imc<18) {
        echo "Peso bajo. Necesario valorar signos de nutrición";

    }else if (($imc>=18) and ($imc<=24.9)) {
        
        echo "Peso normal"." ".$imc;
    }else if (($imc>=25) and ($imc<=26.9)) {
        echo "Sobrepeso"." ".$im;
    }else if (($imc>=27) and ($imc<=29.9)) {
        echo "Obesidad grado I";
    }else if (($imc>=30) and ($imc<=39.9)) {
        echo "Obesidad grado II";
    }else if ($imc>40) {
        echo "Obesidad grado III";
    }

?>
<body style="background-color: #2ed8ad;">
    <br>
    <hr>
    <a href="imc.php"><h3>Regresar</h3></a>
</body>
