<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'El Condor';
$this->params['breadcrumbs'][] = $this->title;
?>   

<div class="cabecera-turismo cabecera-turismo-elcondor">
    <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'condor' . DIRECTORY_SEPARATOR; ?>
    <img class="d-block w-100" src="<?= $directorioImagenes . 'cabecera.jpg'; ?>" alt="Balneario El Condor"> 
</div>
<div class="container-site">
    <h3 class="text-center mt-5 mb-5"> <span class="text-overpassbold text-blue-site">  Camping y complejo. </span> El Condor </h3>
    <div class="row p-descrip-page mt-3">
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 pr-lg-5 pr-md-5 scroll-column  text-align-right">            
            <span class="text-overpassbalck"> El Condor </span>
            <p>
                Esta Villa Balnearia es el principal centro de servicios del Camino de la Costa, 
                donde se accede por la Ruta Provincial N°1 (asfaltada), 
                a solo 30 minutos de la ciudad de Viedma, Río Negro.
                <br />
                Se caracteriza por sus extensas y tranquilas playas como también por sus 
                altos acantilados y por ser el epicentro de los deportes de viento, 
                tales como Kitesurf, Windsurf, Carrovelismo, kitebuggy, entre otros.
            </p>
            <span class="text-overpassbalck"> Sus Playas </span>
            <p>
                Sobre el Camino de La Costa, podes disfrutar de una variedad de Playas donde cada una tiene su encanto natural.
            </p>
            <p>
                La playa El Espigón: a solo 15 km de el Balneario El Condor, se caracteriza por un gran peñón que 
                se interna 80 metros mar adentro y ofrece condiciones incomparables para la Surf, Bodyboard, kayak 
                y Stand Up Paddle. Está protegida por altos acantilados y se puede acceder a ella a través de una 
                gran escalinata, donde aventureros suben a sus tablas y desafían las olas patagónicas, así como 
                también aficionados a la pesca la visitan durante todo el año en busca de experiencias únicas.
            </p>
            <p>
                A unos metros más adelante, se encuentra la Playa Bonita, denominada así por su singular belleza de aguas transparentes. 
                Se accede a ella a través de una escalera que se abre entre los acantilados.
            </p>
            <p>
                La Lobería: siguiendo el recorrido del Camino de la Costa, a 15 km. de El Espigón, se encuentra este 
                pequeño pueblo balneario verdaderamente original por los piletones naturales socavados por el 
                mar que se descubren durante la bajamar. En verano cuenta con servicio de guardavidas, restaurante,
                baños públicos, kiosco y estacionamiento.<br />
                A 3km del pueblo, se encuentra la Reserva Faunística Punta Bermeja, 
                que a través de sus miradores permiten contemplar la mayor colonia de lobos marinos de un pelo de Sudamérica, 
                toninas overas, orcas, delfines y, ocasionalmente ballenas francas.
            <br />
                En las inmediaciones del balneario, caminando apenas 1 km por la playa, se accede a un recinto bautizado por los
                lugareños como El Anfiteatro, al cual ciertas teorías y testimonios adjudican a ese espacio una condición física especial,
                relacionada con altas concentraciones de ozono que propician un gran bienestar energético y la manifestación de fenómenos paranormales.   
            </p>
            <p>
                Bahía Rosas/La Ensenada: finalizando el recorrido sobre el Camino de la Costa, a 15km de La Lobería, 
                se encuentra esta playa que constituye un sitio frecuentado por pescadores locales y visitantes que se ven atraídos por 
                la profundidad de sus aguas y las óptimas condiciones para la pesca costera de tiburón, cazón, pejerrey, róbalo, corvina, pez gallo, 
                pez elefante, etc.<br />
                Un atractivo para toda la familia es la posibilidad de deleitarse con la visita de ballenas entre julio y octubre.</p>
        </div>

        <div class="col-lg-6 pl-lg-5 carousel-column">
            <div id="carouselExampleIndicators1" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                <?php $directorioImagenes = \Yii::getAlias('@web') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'turismo' . DIRECTORY_SEPARATOR . 'condor' . DIRECTORY_SEPARATOR; ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'elcondor1.jpg'; ?>" alt="Balneario El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'elcondor2.jpg'; ?>" alt="espigon" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'elcondor3.jpg'; ?>" alt="loberia" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'elcondor4.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="divider"></div>

    <div class="row p-descrip-page" >
        <!-- Columna con desplazamiento -->
        

        <div class="col-lg-6 pr-lr-5 pr-md-5 carousel-column">
            <div id="carouselExampleIndicators3" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo1.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo2.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo3.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo4.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo5.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo6.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo7.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'complejo8.jpg'; ?>" alt="Complejo El Condor" data-toggle="modal" data-target="#imageModal">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
        
        <div class="col-lg-6 pl-lg-5 pl-md-5 scroll-column text-align-left">
            <span class="text-overpassbalck"> Nuestro Complejo: </span>
            <p> Está situado frente al mar, en Playa Central. A metros de los mejores locales gastronómicos del balneario y a 50 mts. del Casino.

            </p>
            <p>
                Cuenta con 8 departamentos, todos con vista al mar, con las siguientes comodidades.<br />
                4 departamentos de planta baja equipados para 6 personas:
            <ul class="list-right">
                    <li>  3 dormitorios </li>
                    <li>  cocina/comedor </li>
                    <li>  1 baño </li>
                    <li>  estacionamiento para vehículo propio </li>
                    <li>  garage con fogón y parrilla </li>
                    <li>  pequeño 	patio cerrado individual </li>
                    <li>  televisor led con señal satelital </li>
                </ul>             
                <br />
                4 departamentos en primer piso equipados para 6 personas:
                <ul class="list-right">
                    <li> 3 dormitorios </li>
                    <li> cocina/comedor </li>
                    <li> 1 baño </li>
                    <li> estacionamiento para vehículo propio </li>
                    <li> fogón y parrilla </li>
                    <li> amplio balcón con vista al mar </li>
                    <li> televisor led con señal satelital </li>
                </ul>
                 
            </p>
        </div>
        
    </div>
    
    <div class="divider"></div>

    <div class="row p-descrip-page">
       
        
        <!-- Columna con desplazamiento -->
        <div class="col-lg-6 pr-lg-5 pr-md-5 scroll-column  text-align-right">
            <span class="text-overpassbalck"> Nuestro Camping </span>
            <p> Está situado a 100mts del mar, en Playa Central. A metros de los mejores locales gastronómicos del balneario y a 100 mts. del Casino.
            </p>
            <p>
                Contamos con 22 boxs, con las siguientes comodidades: 
            <ul class="">
                <li> fogón</li>
                <li> baños</li>
                <li> duchas</li>
                <li> zona de lavandería</li>
                <li> estacionamiento para vehículos</li>
                
            </ul>         
            </p>
        </div>
        
         <div class="col-lg-6 pr-lg-5 pr-md-5 carousel-column">
            <div id="carouselExampleIndicators2" class="carouselExampleIndicators carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'camping1.jpg'; ?>" alt="Imagen 1" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'camping1.jpg'; ?>" alt="Imagen 2" data-toggle="modal" data-target="#imageModal">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= $directorioImagenes . 'camping1.jpg'; ?>" alt="Imagen 3" data-toggle="modal" data-target="#imageModal">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>

        
    </div>
    
    
    <div class="col-sm-12 ">
        <?php
        $tetxoTooltip = "

<div class='popup-elcondor  text-blue-site'>            
<b>En avión</b>, hasta el aeropuerto de Viedma, luego en auto o colectivo hasta El Condor.<br /><br />
<b>En colectivo</b>, desde todas las terminales nacionales, arribando a la terminal de Viedma, luego en auto o colectivo hasta El Condor.<br /><br />
<b>En auto</b>, la distancia desde Buenos Aires es de 940 km.<br /><br />
<b>En el tren Patagónico</b>, que atraviesa la provincia de Río negroy arriba en Viedma, luego en auto o colectivo hasta El Condor.
<div class='d-flex'>
    <div class='w-50 display-inlineblock'>
        <span class=''><i class='fa-solid fa-location-dot fa-2xl'></i> camping </span>
    </div>
    <div class='w-50 display-inlineblock text-align-right'>    
        <span class=''><i class='fa-solid fa-location-dot fa-2xl'></i> complejo </span>
    </div>
</div>
</div>
    
    ";
        
        ?>
        <button type="button" class="btn text-overpassbold font3rem" data-toggle="popover" data-content="<?= $tetxoTooltip;?>"> <span class="float-left"> <i class="fa-solid fa-location-dot fa-2xl"></i></span><span>¿Cómo <br /> llego? </span></button>
    </div>




</div>
  
  
<!-- Modal para ampliar imágenes -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img class="img-fluid" src="" alt="Ampliación de imagen">
            </div>
        </div>
    </div>
</div>