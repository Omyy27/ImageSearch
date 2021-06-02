<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor de Busqueda</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
 <!--fuentes-->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    </head>
            <body>
                <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top shadow-sm p-3 mb-5 bg-white rounded">
        <div class="container">
          <a class="navbar-brand text-dark" style="font-family: Raleway;" href="index.php">Search<span style="color: #f8b400;">.</span>By</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link text-dark" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
            <div class="container pt-3 shadow p-3 mb-5 bg-white rounded">
        <?php

            $nombre = $_FILES['imagen']['name'];
            $nombrer = strtolower($nombre);
            $cd=$_FILES['imagen']['tmp_name'];
            $ruta = "img/" . $_FILES['imagen']['name'];
            $destino = "img/".$nombrer;
            $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        //echo $nombre;
        //echo $destino;

        echo '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>El archivo fue subido correctamente!</strong>
                </div>';
        echo '<p><img src="img/'.$nombrer.'" width="400" height="453" class="rounded mx-auto d-block"></p>';




           $salida = shell_exec('python C:\xampp\htdocs\motordebusqueda\vacation-image-search-engine/search.py --index C:\xampp\htdocs\motordebusqueda\vacation-image-search-engine/index.csv --query C:\xampp\htdocs\motordebusqueda/'.$destino.' --result-path C:\xampp\htdocs\motordebusqueda\vacation-image-search-engine/dataset') ;

            //echo '<a>'.$salida.'</a>';
 
            $imagenes = explode(",", $salida);
 
                echo "<br>";
        
                    echo "<div class='row'>";
                    echo "<div class='col-sm-4'>";

                    $i=1;
                    foreach($imagenes as $resultado){
                        if ($i<(count($imagenes)-1)) {
                            $resultado = str_replace(" ", "", $imagenes[$i]);
                        //echo "<br>";
                        echo '<img src="vacation-image-search-engine/' . $resultado . '"width="200" height="200" class="p-2 border">';
                        echo "</div>";
                        if($i % 3==0){
                            echo "</div>";
                            echo "<div class='row'>";
                        }
                        echo "<div class='col-sm-4'>";
                        $i++;
                        }
                        //echo "<br>";
                    }
                    echo "</div>";
                    echo "</div>";

    ?>
        
 </div>
       
</body>
</html>




