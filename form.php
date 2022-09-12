<?php
 
$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$faltas = $_POST["faltas"];
 
$media = ($nota1 + $nota2 + $nota3)/3;
 
 
 
if ($faltas >=10){ 
 
    if ($media >= 5){
        echo "<H1>CONSELHO!!!</H1>";
    }
 
    else {
        echo "<H1>REPROVADO OTARIO!!!!!!!!</H1>";
}
}
else if ($media >= 8){
    echo "<H1>APROVADO</H1>";
}
else if ($media >= 5){
    echo "<H1>RECUPERAÇÃO</H1>";
}
else {
    echo "<H1>REPROVADO OTARIO!!!!!!!!</H1>";
}
