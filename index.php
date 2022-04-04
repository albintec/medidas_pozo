<?php require ('conexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manometro</title>
    <script src="./librerias/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./librerias/bootstrap/css/bootstrap.min.css">
    <script src="./librerias/plotly-2.9.0.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                       <h1>Grafica de mediciones</h1> 
                    </div>
                    <div class="panel panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                             <div id="cargaLineal">

                             </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
       $('#cargaLineal').load('lineal.php');
    });
</script>