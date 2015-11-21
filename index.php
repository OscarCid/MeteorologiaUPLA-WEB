<!DOCTYPE html>
<html>
<head>
    <title>Meteorologia UPLA</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="scr/js/actualizarIndex.js"></script>
    <link rel="icon" type="image/png" href="/scr/img/favicon.ico">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<div class="container-fluid">
<?php
$pag="inicio";
include ("scr/php/menu.php");
?>

<style>
/* unvisited link */
#lonk a:link {
    color: black !important;
	text-decoration: none !important;
}

/* visited link */
#lonk a:visited {
    color: black !important;
	text-decoration: none !important;
}

/* mouse over link */
#lonk a:hover {
    color: black !important;
	text-decoration: none !important;
}

/* selected link */
#lonk a:active {
	text-decoration: none !important;
    color: black !important;
}
</style>

<div class="row" style="padding-bottom: 10px;">
    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 " style=" padding-bottom: 7px; border-bottom: 1px solid ">
        <div class="col-md-4 col-sm-4 col-xs-4">
            <img src="scr/img/uplafi.png" class="img-responsive"/>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
            <img src="scr/img/armada.png" class="img-responsive"/>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
            <img src="scr/img/conaf.png" class="img-responsive"/>
        </div>
    </div>
</div>
<div class="col-md-10 col-md-offset-1">

    <div class="row">
        <p class="text-justify">La Facultad de Ingeniería en colaboración con la Dirección de Meteorología de la Armada de Chile y la Corporación Nacional Forestal (CONAF) se encuentra habilitando estaciones meteorológicas Davis en diferentes áreas protegidas de la Región de Valparaíso. En una primera fase se habilitaron El Parque Nacional La Campana y Santuario de la Naturaleza Laguna el Peral. Próximamente se espera agregar La Reserva Nacional El Yali y La Reserva Nacional Lago Peñuelas, finalmente se espera agregar un equipo en las propias dependencias de la Facultad de Ingeniería. Los datos instantáneos son publicados en línea en los enlaces que se presentan a continuación y aquellos investigadores que requieran las series de tiempo pueden solicitarlas a nuestra Facultad.</p>
        <br>
    </div>

    <div class="row" id="lonk">
        <div class="col-sm-6 col-md-4 col-lg-4">
		<a href="yali">
            <div class="thumbnail">
				<h3 class="text-center">Estación El Yali</h3>
                <img src="scr/img/Yali.jpg" alt="..." height="200px" width="500px">
                <div class="caption">
                    
                    <p>...</p>
                    
                </div>
            </div>
		</a>
        </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
            <a href="campana">    
				<div class="thumbnail">
					<h3 class="text-center">Estación La Campana</h3>
                    <img src="scr/img/Campana.jpg" alt="..." height="200px" width="500px">
                    <div class="caption">
                        
                        <p>...</p>
                        
                    </div>
                </div>
			</a>	
             </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
				<a href="peral">
                    <div class="thumbnail">
						<h3 class="text-center">Estación El Peral</h3>
                        <img src="scr/img/Peral.jpg" alt="..." height="200px" width="500px">
                        <div class="caption">
                            
                            <p>...</p>
                            
                        </div>
                    </div>
				</a>	
                </div>

    </div>
</div>

</div>
<?php include ("scr/php/foot.php")?>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

