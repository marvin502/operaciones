<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="background-color:rgb(226, 232, 233)">
        <h2>SE RECIBIERON LOS SIGUIENTES DATOS</h2>
        <?php
            echo "Primer Número: ".$_POST["pnumero"]."<br>";
            echo "Segundo Número: ".$_POST["snumero"]."<br>";
            echo $_POST["operacion"]."<br><br><br>";
            //PARA OBTENER EL RESULTADO
            $num1 = $_POST["pnumero"];
            $num2 = $_POST["pnumero"];
            $op = $_POST["operacion"];
            $resultado;
        
            if($_REQUEST["operacion"]=="suma")
            {
                $suma=$_REQUEST["pnumero"] + $_REQUEST["snumero"];
                echo "LA SUMA ES = ".$suma."<br><br>";
             }else{
                if($_REQUEST["operacion"]=="resta")
            {
                $resta=$_REQUEST["pnumero"] - $_REQUEST["snumero"];
                echo "LA RESTA ES = ".$resta."<br><br>";
             } else{
                if($_REQUEST["operacion"]=="multiplicacion")
            {
                $multiplicacion=$_REQUEST["pnumero"] * $_REQUEST["snumero"];
                echo "LA MULTIPLICACION ES  = ".$multiplicacion."<br><br>";
             }
             }
             }
            ?>
            <br>
            <a href="index.php" class="btn btn-warning">Regresar</a>
    </div>
</body>
</html>