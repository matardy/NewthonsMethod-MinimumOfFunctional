<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" type="image/ico" href="img/icono.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Otomanopee+One&display=swap" rel="stylesheet">






    <link rel="stylesheet" href="style1.css">
    


    
</head>

<body>
    <!--<div class="loader-page"></div>-->
    <div class="contenedor">
    <h2>ESCUELA POLITÉCNICA NACIONAL </h2>
    <h2>Proyecto primer bimestre - Newton Multivariable </h2>
            <h2>Métodos Numéricos</h2>
        </header>
        <section class="contenido">
            <form class="formulario"action="php/newtonMultivariable.php" method="post">
                <fieldset>
                    <legend style="text-align: center;">INGRESO DE DATOS:</legend>

                    

                    <?php
                    $num = $_POST['num']; if($num==1)
                    {?>
                    <fieldset>
                            <div class="recuadro">
                                <label for="funcion">Ingrese la función que quiere usar  <br> * f(a) =
                                </label>
                                <input type="text" name="funcion" id="funcion" placeholder="a + 3" value="a + 3">
                            </div>

                            <div class="recuadro">
                                <label for="a">Ingrese la estimativa inicial para (a):</label>
                                <input type="text" class="cuadro" name="a" id="a" placeholder="Por ejemplo: 2" value="5"
                                step="0.0000001" />
                            </div>

                            <div class="recuadro">
                                <label for="tol">Ingrese la Tolerancia</label>
                                <input type="number" name="tol" id="tol" placeholder="0.00001" step="0.00001" value="0.1">
                            </div>

                        <input class="boton" type="submit" value="Enviar" name="btnA" >

                    </fieldset>

                    <?php   
                    }?>


                    <?php
                    $num = $_POST['num']; if($num==2)
                    {?>
                    <fieldset>
                            <div class="recuadro">
                                <label for="funcion">Ingrese la función que quiere usar  <br> * f(a,b) =
                                </label>
                                <input type="text" name="funcion" id="funcion" placeholder="a*b + 3" value="a*b + 3">
                            </div>

                            <div class="recuadro">
                                <label for="a">Ingrese la estimativa inicial para (a):</label>
                                <input type="text" class="cuadro" name="a" id="a" placeholder="Por ejemplo: 2" value="5"
                                step="0.0000001" />
                            </div>

                            <div class="recuadro">
                                <label for="b">Ingrese la estimativa inicial para (b):</label>
                                <input type="text" class="cuadro" name="b" id="b" placeholder="Por ejemplo: 2" value="5"
                                step="0.0000001" />
                            </div>

                            <div class="recuadro">
                                <label for="tol">Ingrese la Tolerancia</label>
                                <input type="number" name="tol" id="tol" placeholder="0.00001" step="0.00001" value="0.1">
                            </div>

                        <input class="boton" type="submit" value="Enviar" name="btnA" >

                    </fieldset>

                    <?php   
                    }?>


                    <?php
                    $num = $_POST['num']; if($num==3)
                    {?>
                    <fieldset>
                            <div class="recuadro">
                                <label for="funcion">Ingrese la función que quiere usar  <br> * f(a,b,c) =
                                </label>
                                <input type="text" name="funcion" id="funcion" placeholder="a*b + 3" value="a*b + 3*c">
                            </div>

                            <div class="recuadro">
                                <label for="a">Ingrese la estimativa inicial para (a):</label>
                                <input type="text" class="cuadro" name="a" id="a" placeholder="Por ejemplo: 2" value="5"
                                step="0.0000001" />
                            </div>

                            <div class="recuadro">
                                <label for="b">Ingrese la estimativa inicial para (b):</label>
                                <input type="text" class="cuadro" name="b" id="b" placeholder="Por ejemplo: 2" value="5"
                                step="0.0000001" />
                            </div>

                            <div class="recuadro">
                                <label for="c">Ingrese la estimativa inicial para (c):</label>
                                <input type="text" class="cuadro" name="c" id="c" placeholder="Por ejemplo: 2" value="5"
                                step="0.0000001" />
                            </div>

                            <div class="recuadro">
                                <label for="tol">Ingrese la Tolerancia</label>
                                <input type="number" name="tol" id="tol" placeholder="0.00001" step="0.00001" value="0.1">
                            </div>

                        <input class="boton" type="submit" value="Enviar" name="btnA" >

                    </fieldset>

                    <?php   
                    }?>


<?php
                    $num = $_POST['num']; if($num==4)
                    {?>
                    <fieldset>
                            <div class="recuadro">
                                <label for="funcion">Ingrese la función que quiere usar  <br> * f(a,b,c,d) =
                                </label>
                                <input type="text" name="funcion" id="funcion" placeholder="a*b + 3*c-d" value="a*b + 3*c-d">
                            </div>

                            <div class="recuadro">
                                <label for="a">Ingrese la estimativa inicial para (a):</label>
                                <input type="text" class="cuadro" name="a" id="a" placeholder="Por ejemplo: 2" value="5"
                                step="0.0000001" />
                            </div>

                            <div class="recuadro">
                                <label for="b">Ingrese la estimativa inicial para (b):</label>
                                <input type="text" class="cuadro" name="b" id="b" placeholder="Por ejemplo: 2" value="5"
                                step="0.0000001" />
                            </div>

                            <div class="recuadro">
                                <label for="c">Ingrese la estimativa inicial para (c):</label>
                                <input type="text" class="cuadro" name="c" id="c" placeholder="Por ejemplo: 2" value="5"
                                step="0.0000001" />
                            </div>

                            <div class="recuadro">
                                <label for="d">Ingrese la estimativa inicial para (d):</label>
                                <input type="text" class="cuadro" name="d" id="d" placeholder="Por ejemplo: 2" value="5"
                                step="0.0000001" />
                            </div>

                            <div class="recuadro">
                                <label for="tol">Ingrese la Tolerancia</label>
                                <input type="number" name="tol" id="tol" placeholder="0.00001" step="0.00001" value="0.1">
                            </div>

                        <input class="boton" type="submit" value="Enviar" name="btnA" >

                    </fieldset>

                    <?php   
                    }?>



 


                   



                
                </fieldset>
            </form>
        </section>



    </div>
    </body>

</html>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script>
    function variables ()
    {
        var n = parseInt(document.getElementById("inf").value);
        

        if(n===1)
        {
            document.getElementById('recuadro');
            (document.body).append('recuadro');



            
            $(document.body).append( "<h1> there is no user </h1>" );
        }

        

    }
</script>








    </script>

