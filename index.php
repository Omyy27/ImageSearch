<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Image search</title>          
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--CSS Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Jquery, js-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    

  <!-- Estilos adicionales-->
    <style>
            #mostrar {
                      display: none;
                    }
            .nav-link{
                      font-family: Open Sans;
                      font-weight: bold;
                    }
            h2{
                      font-family: Raleway;
                      color: #303960;
              }

            button{
                      font-family: Open Sans;

                }
                /* Make the image fully responsive */

    </style>
        
        <!--fuentes-->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    </head>
    <body>
    
        <!--Nav-->
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
      <!--Nav-->

      <!--Container-->
      <div class="container">
          <header class="jumbotron my-4 shadow bg-gray rounded">
              <h1 class="display-3" style="font-family: Raleway; color: #303960;">Bienvenido!</h1>
              <p class="lead" style="font-family: Open Sans; color: #303960;">Sube tu imágen</p>
          
          <div class="container pt-3 shadow p-3 mb-5 bg-white rounded">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buscar Imágen</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header">
                      <!--oculta animación de carga-->
                      <div id="mostrar" name="mostrar">
                        <div class="d-flex align-items-center">
                            <strong>Cargando...</strong>
                              <div class="spinner-border ml-auto" role="status"></div>
                        </div>
                    </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Buscar</h4>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <div class="input-group">
                            
                         <form action="foto_post.php" method="POST" enctype="multipart/form-data" class="input-group shadow p-3 mb-5 bg-white rounded">
                            <div class="custom-file">
                                <input name="imagen" type="file" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Subir imágen</label>
                            </div>
                            <div class="input-group-append">          
                                <button type="submit" value="Agregar" name="enviar" class="btn btn-outline-secondary" id="enviar" onclick="myFunction()">Agregar</button>
                                <script>
                                     function myFunction() {
                                            var x = document.getElementById("mostrar");
                                            if (window.getComputedStyle(x).display === "none") {
                                                x.style.display = "block";
                                            }
                                            }
                                    
                                </script>
                            </div>
                                                            
                        </form>
                                
                                       
                            </div>
                      
                </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
                
                </div>
            </div>

                </div>
        </header>
      </div><br>

      <div class="container">
  <div class="row">
          <div class="col-12">
            <h2 class="d-flex justify-content-center">Motor de busqueda basado en imágenes</h2><br>

            <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1590918702599-adcd064d497a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=753&q=80" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Husdson River</h3>
        <p>Mas cerca de New York!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1591367213443-9381e8862361?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Kézdivásárhely, Romania</h3>
        <p>El colorido!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1591253372832-bccdc782a430?ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Swiss Alps</h3>
        <p>Blanco asombroso.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
          </div>

        
</div><br>
      <!--Container-->
    <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Search.By 2020</p>
    </div>
    <!-- /.container -->
  </footer>
       
    </body>

</html>