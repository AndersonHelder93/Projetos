<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Carros</title>
    </head>
    <body>
    <div>
        <?php
            $valor = $_POST['valor'];
            if($valor >0){
            echo"Boa";
        }   else if($valor != float){
            echo"volta";
        }
    ?>
    
    <a href="inicio.php" type="submit">Voltar</a>
        </div>
    </body>
</html>

