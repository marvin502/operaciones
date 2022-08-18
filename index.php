<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <div class="row">
        <div class="col">
            lado izquierdo
        </div>

    <div class="col">
        <div class="contaier-fluid" style="background-color:rgb(226, 232, 233)">
        <form action="proceso.php" method="post" style="padding:10px">
            <legend class="navbar navbar-dark bg-primary text-white">OPERACIONES MATEMATICAS</legend>
            <label for="pnumero" class="form-label">Primer Numero</label>
            <input type="text" name="pnumero" class="form-control">
            
            <label for="snumero">Segumdo Numero</label>
            <input type="text" name="snumero" class="form-control">

            <!--  -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operacion" value="suma">
                <label class="form-check-label">
                Suma
                </label>
            </div>
                <!-- ded -->
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operacion" value="resta">
                    <label class="form-check-label">
                    Resta
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operacion" value="multiplicacion">
                    <label class="form-check-label">
                    Multiplicacion
                    </label>
                </div>
            
            <div style="text-align:center;">
                <input type="submit" class="btn-primary" >
            </div>
        </form>
    </div>
    </div>
            

            <div class="col">
                lado derecho
            </div>

        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>