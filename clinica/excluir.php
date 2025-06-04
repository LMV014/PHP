<html>
<body>
    <?php
    $fone = $_GET["fone"];
    $bd = mysqli_connect("localhost","root","","clinica") or die ("erro!");

    $excluiu=mysqli_query($bd,"delete from pacientes where fone = '$fone'");

    if ($excluiu == 1)
        echo "O registro foi excluído!!!";
    else
        echo "O registro NÃO foi excluído!!!";
    ?>
    <br><a href="consultar.html">Voltar para nova Consulta</a><br>
</body>
</html>