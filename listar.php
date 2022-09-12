<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <tr>
        <td>NOME</td>
       <td>NOTA 1</td>
       <td></td>
        </tr>  
    </table>

</body>
</html>
<?php

include "conn.php";

$dados = $conn ->query("SELECT * FROM aluno");

   while($linha =mysqli_fetch_array ($dados)) {
       $nome = $linha["nome"];
       $nota1 = $linha["nota1"];
       $nota2 = $linha["nota2"];
       $nota3 = $linha["nota3"];
       $media = $linha["media"];
       $faltas = $linha["faltas"];

       echo "
       <tr>
       <td>$nome</td>
       <td>$nota1</td>
       </tr>
       ";
   }
?>
  