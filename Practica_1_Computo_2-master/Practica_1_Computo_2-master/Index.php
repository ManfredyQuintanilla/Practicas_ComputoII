<?php
    //Comentario de una línea
    
    /*
    comentarios
    */
    
    /*
    $numero=10;
    echo "<h1>Programacion Computacional IV</h1>" . $numero;
    */

    //evaluar si se está enviando el boton
    if(isset($_POST['seleccion'])){
        //echo "Click abre el boton";
        $idioma = $_POST['idioma'];
       // echo "<br/>".$idioma;
        INCLUDE $idioma. ".php";
    }
    else{
        echo"No se ha enviado el click";
        INCLUDE "es.php";
    }
?>
<html>
    <head>
        <title>Cambio Idioma</title>
    </head>
    <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
    <div>
            <center>
                <div class="p-3 mb-2 bg-info text-dark">Practica #1
                </div>
            </center>
        <center>
        <form method="POST">
        <div class="bg-success p-2" style="--bs-bg-opacity: .5;">Cambia el idioma del contenido/Change the language of the content</div>
             <select name="idioma" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">    
                <option value="es">Spanish</option>
                <option value="en">English</option> 
            </select>
            <input type="submit" name="seleccion" value="Cambiar" class="btn btn-warning"/>
        </form>
        </center>
    </div>   
        <center> 
            <h1><?php echo TITLE; ?></h1>
            <h1><?php echo HEADING_TITLE; ?></h1>
            <h1><?php echo OVERVIEW_TITLE; ?></h1>
        </center>
    </body>
</html>
