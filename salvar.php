<?php
 /*include esta colocando o outro arquivo aqui*/
include "conn.php";



$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$faltas = $_POST["faltas"];
$media = ($nota1 + $nota2 + $nota3)/3;

$testar = $conn -> query("SELECT * FROM aluno WHERE rm = '$rm' ");
$check = mysqli_num_rows ($testar);

if($check == 1){
echo "RM já cadastrado";

}
else {

$conn ->query("INSERT INTO aluno (nome, nota1, nota2, nota3,media,faltas) VALUES ('$nome', '$nota1', '$nota2', '$nota3', '$media', '$faltas')");

echo "DADOS SALVOS";

}




header("Refresh: 4;url=listar.php");

?>

 