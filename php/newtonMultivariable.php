<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integral</title>
    <link rel="icon" type="image/ico" href="../img/icono.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Otomanopee+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style1.css">
</head>

<body>
    <!--<div class="loader-page"></div>-->
    <div class="contenedor">
        <header style="text-align: left;">
        <h2>ESCUELA POLITÉCNICA NACIONAL </h2>
    <h2>Proyecto primer bimestre - Newton Multivariable </h2>
            <h2>Métodos Numéricos</h2>
        </header>

        <section class="contenido">

            <div class="resultado">
                <center>
            <h3>
    
            <?php
            $fun = $_POST["funcion"];

            //Llena el vector de estimativas
            if(isset($_POST["a"])){
                $estimativa[] = $_POST["a"];
            }
            if(isset($_POST["b"])){
                $estimativa[] = $_POST["b"];
            }
            if(isset($_POST["c"])){
                $estimativa[] = $_POST["c"];
            }
            if(isset($_POST["d"])){
                $estimativa[] = $_POST["d"];
            }
            echo "<br/>"; 
           include "functions.php";
           echo "<br/>";
              
            ?>
            </center>
            </div>
        </section>




    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
            $(window).on('load', function () {
                setTimeout(function () {
                $(".loader-page").css({visibility:"hidden",opacity:"0"})
                }, 2000);
            });
    </script>
</body>

</html>