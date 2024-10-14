<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
    if ($_SERVER["REQUEST_MOTHOD"] == "POST"){
    $paquetes = $_POST["paquetes"];
    $tamano = $_POST["tamano"];
    $precio =0;
    $kilos = $_POST["peso"];
    $incremento =0;
    $zona = $_POST["zona"];
    $incremento2=0;
    $Precio_final= ($paquetes*$precio)*$incremento*$incremento2;

    switch($paquetes){
        case "1";
            $paquetes=1;
        break;
        case "2";
            $paquetes=2;
        break;
        case "3";
            $paquetes=3;
        break;
    }
    
     if ($tamano<=0.5){
        $precio=50;
     }else{
         if($tamano>0.5 & $tamano<=1){
             $precio=75;
         }else{
            $precio=100;
         }
     }
    if ($kilos>5){
        $incremento=0.25;
    }else{
        if($kilos>5 & $kilos<=15){
            $incremento=0.5;
        }else{
            echo "EL paquete pesa demasiado";
           exit;
        }
    }
    if ($zona == "Peninsula" & $zona == "Baleares maritimo"){
        $incremento2="";
    }else{
        if($zona == "Baleares aereo"){
            $incremento2=0.1;
        }else{
            $incremento2=0.1;
        }
    }
}
    echo "El precio de tu paquete es:" . $Precio_final;

    
    ?>
    <form method="POST" action="">
        <label for="paquetes">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
        <label for="tamano">TAMAÑO:</label>
        <input type="number" id="tamano" name="tamano" value="">
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <input type="submit" value="Calcular">
        <label for="zona">ZONA:</label>
        <input type="text" id="zona" name="zona" value="">
        <input type="text" value="Calcular">
    </form>
</body>
</html>