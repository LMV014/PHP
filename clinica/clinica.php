<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
</head>
<body>
    <?php
    $con=mysqli_connect("localhost","root","","clinica") or die ("erro!");

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $fone = $_POST["fone"];
    $data_consulta = $_POST["data_consulta"];
    $receita = $_POST["receita"];
    $quadro_clinico = $_POST["quadro_clinico"];
    
    $in = "insert into pacientes values('$nome',
                                            '$cpf',
                                            '$fone',
                                            '$data_consulta',
                                            '$receita',
                                            '$quadro_clinico')";

$incluir=mysqli_query($con,$in);

if ($incluir == 1) {
    echo "
    Nome:               $nome<br>
    CPF:                $cpf<br>
    Fone:               $fone<br>
    Data Consulta:      $data_consulta<br>
    Receita:            $receita<br>
    Quadro Clinico:     $quadro_clinico<br>";

    echo "Registro incluido com sucesso";
} else {
    echo "Registro não incluido";
}

// Excluindo

$excluiu=mysqli_query($bd,"delete from pacientes where placa = '$placa'");

if ($excluiu == 1)
		echo "O registro foi excluído!!!";
	else
		echo "O registro NÃO foi excluído!!!";

?>
<br><a href="consultar.html">Voltar para nova Consulta</a><br>

    ?>
</body>
</html>