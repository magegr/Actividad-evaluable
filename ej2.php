<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
     if ($_SERVER["REQUEST_MOTHOD"] == "POST"){
        $numero= $_POST["num"];

        if ($numero%2 == 0){
            echo "El numero es par";

        }else{
                echo "El numero es impar";
            }

     }  
    ?>
    
    <form method="POST" action="">
        <label for="num">NÚMERO:</label>
        <input type="number" id="num" name="num" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>