<?php

//require_once("conexion.php");

$nombre = $_FILES['imagen']['name'];
$nombrer = strtolower($nombre);
$cd=$_FILES['imagen']['tmp_name'];
$ruta = "img/" . $_FILES['imagen']['name'];
$destino = "img/".$nombrer;
$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
echo $nombre;
echo $destino;

 echo "el archivo ha sido movido exitosamente";
 echo '<p><img src="img/'.$nombrer.'" width="400" height="453"></p>';

 /*$salida = shell_exec('python C:/xampp/htdocs/motordebusqueda/vacation-image-search-engine/search.py --index C:/xampp/htdocs/motordebusqueda/vacation-image-search-engine/index.csv --query C:/xampp/htdocs/motordebusqueda'. $destino .'--result-path C:/xampp/htdocs/motordebusqueda/vacation-image-search-engine/dataset') ;*/


 $salida = shell_exec('python C:\Users\OmarDavid\Desktop\vacation-image-search-engine-20200219T213638Z-001\vacation-image-search-engine/search.py --index C:\Users\OmarDavid\Desktop\vacation-image-search-engine-20200219T213638Z-001\vacation-image-search-engine/index.csv --query C:\xampp\htdocs\motordebusqueda/'. $destino . ' --result-path C:\Users\OmarDavid\Desktop\vacation-image-search-engine-20200219T213638Z-001\vacation-image-search-engine\dataset') ;

   echo $salida;


    $imagenes = explode(",", $salida);

   echo "<br>";
        $i=0;
        foreach($imagenes as $resultados){
            $resultados = str_replace(" ", "", $imagenes[$i]);
            echo "<br>";
            echo '<img src="' . $resultados . '" >';
            $i++;
            echo "<br>";
        }
//if (!empty($resultado)){
                /*$sql = "INSERT INTO fotos VALUES ('". $nombre."','" . $destino . "')";
                if ($conexion->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo "el archivo ha sido movido exitosamente";
                echo '<p><img src="img/'.$nombrer.'" width="400" height="453"></p>';

                //}else{

                  //  echo "Error al subir el archivo";*/

  //                  }

  //system("python search.py --index index.csv --query C:/xampp/htdocs/motordebusqueda/img/cocora.png --result-path dataset");


?>