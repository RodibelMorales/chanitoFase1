<!doctype html>
<html lang="es">
<head>
<title> José Luis Chanito Toledo | Para Ti Chanito </title>
 <meta name="keywords" content="Chanito Toledo, José Luis Toledo, Consulta Ciudadana, Quintana Roo Cuenta con Todos, PRI, PRI Quintana Roo, Diputados PRI, Cámara de Diputados, CHT, Encuesta Chanito, Diputados Quintana Roo, Chanito Quintana Roo, LXIII Legislatura de la cámara de diputados"/>
    <?php 
    include('parches/head.php');
    ?>
    
</head>
<body>
    <section id="menuT">
        <div class="TrianguloFondo menustick">   </div>
            <div class="VerMenuIco"></div>
            <?php include('menu.php'); ?>
        <section class="container">
            <div class="row">
                <div>
                    <video autoplay loop id="fondoMultimedia" controls muted>
                        <source src="video/chanito.mp4" type="video/mp4">
                    </video>
                </div>
                <div id="formularioBusqueda">
                    <div id="tituloMultimedia">Mi Foto Con #ChanitoToledo</div>
                    <form class="form-inline" role="form">
                      <div class="form-group">
                        <select type="date" class="form-control" id="selectfiltro">
                            <option>Selecciona una opción</option>
                            <option>Solidaridad</option>
                            <option>Benito Juarez</option>
                            <option>Othon P. Blanco</option>
                            <option>Tulum</option>
                            <option>Felipe Carrillo Puerto</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <input type="date" class="form-control" id="inputfiltro">
                      </div>
                      <button type="submit" class="btn btn-success"><i class="fa fa-search"></i>Buscar</button>
                    </form>
                </div>
            </div>
        </section>   
        <?php 
            include('footer.php');
        ?> 
    </section>
</body>
<?php include('parches/parches_scripts.php');?>
</html>