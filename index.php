<?php
$titulo = "Inicio";
include('./config/plantilla/head.php');
?>
<!-- Slider -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-height:500px;overflow:hidden;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="./img/bgimage2.png" alt="Image 1">
      </div>

      <div class="item">
        <img src="./img/bgimage2.png" alt="Image 2">
      </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
      </a>
      </div> <!-- End Slider -->
    <div class="container">
      <!-- Columnas -->
      <div class="row">
      <div class="col-md-3">
      <div class="thumbnail">
        <img src="img/hosting.png" alt="...">
        <div class="caption">
        <h3>Hosting</h3>
        <p></p>
        <p><a href="#" class="btn btn-primary" role="button">Ver m&aacute;s &raquo;</a></p>
        </div>
      </div>
      </div>
    <div class="col-md-3">
    <div class="thumbnail">
      <img src="img/hosting.png" alt="...">
      <div class="caption">
      <h3>Dominio</h3>
      <p></p>
      <p><a href="#" class="btn btn-primary" role="button">Ver m&aacute;s &raquo;</a></p>
      </div>
    </div>
    </div>
    <div class="col-md-3">
    <div class="thumbnail">
      <img src="img/hosting.png" alt="...">
      <div class="caption">
      <h3>MiniVPS</h3>
      <p></p>
      <p><a href="#" class="btn btn-primary" role="button">Ver m&aacute;s &raquo;</a></p>
      </div>
    </div>
    </div>
    </div>

<?php include('./config/plantilla/footer.php'); ?>
