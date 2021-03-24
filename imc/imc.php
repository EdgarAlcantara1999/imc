<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #2ed8ad;">
    <div class="container">
        <div class="row"><!---Titulo-->
            <div class="col-sm-4   "></div>
                <div class="col-sm-4-text-center mt-5" >
                    <b><h1 style="font-weight: 700"><span style="color: blue;">CALCULA TU IMC</span></h1></b>
                </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row mt-4">
            <div class="col"></div>
            <div class="col">
                <form action="obtenerPesoEstatura.php" method="POST">
                    <label for="peso"><h6>Peso: </h6></label>
                    <input type="number" name="peso" step=".01" id="peso" placeholder="Ingresa tu peso" required>
                    <br>
                    <label for="estatura" style="margin-top: 30px;"><h6>Estatura: </h6></label >
                    <input type="number" name="estatura" step=".01" id="estatura" placeholder="Ingresa tu estatura" required>
                    <br>
                    <button class="btn btn-danger btn-block" style="margin-top: 30px;">Calcular</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>