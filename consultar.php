<html lang="en">
<head>
</head>
<body>
    <?php

    $expressao= $_POST["expressao"];
    $bd = mysqli_connect("localhost","root","","imobiliaria") or die ("erro!")

    if (isset($_POST["op"]))
    {
        $op = $_POST ["op"];
        if ($op == "endereco")
            $consulta=mysqli_query($bd, "select * from veiculos where endereco='$expressao'")
        if ($op == "cidade")
            $consulta=mysqli_query($bd, "select * from veiculos where cidade='$expressao'")
        if ($op == "estado")
            $consulta=mysqli_query($bd, "select * from veiculos where estado='$expressao'") 
        if ($op == "cep")
            $consulta=mysqli_query($bd, "select * from veiculos where cep='$expressao'")
        if ($op == "tipo")
            $consulta=mysqli_query($bd, "select * from veiculos where tipo='$expressao'")
    } else
    {
        echo "Volte a página e escolha o campo que fará a pessoa"
        exit;
    }

    ?>
</body>
</html>