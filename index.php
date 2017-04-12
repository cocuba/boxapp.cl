<!-- agregamos el header -->
<?php 
	include "includes/header.html"
?>


<div id="carousel-boxapp" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
<!--    <ol class="carousel-indicators">-->
<!--        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
<!--        <li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
<!--        <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
<!--    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="public/images/bck6.jpg" alt="">
            <div class="carousel-caption carousel-caption-boxapp2">
                <h3 class="text-uppercase">
                    Desarrollamos tus ideas
                </h3>

            </div>
        </div>
        <div class="item">
            <video autoplay loop>
                <source src="public/video/background_video.mp4" type="video/mp4">
            </video>
            <!--            <img src="" alt="...">-->

            <div class="carousel-caption carousel-caption-boxapp2">
                <h3 class="text-uppercase">
                    Somos una empresa dedicada a desarrollar software de calidad de acuerdo a las necesidades de nuestros clientes
                </h3>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-boxapp" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-boxapp" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<!--<div class="principal-container">-->
<!--	<div class="first-banner">-->
<!--		<h1>Boxapp</h1>-->
<!--		<h3>Lorem Ipsum</h3>-->
<!--	</div>-->
<!--</div>-->

<div class="container-fluid div-productos" id="productos">
	<div class="col-md-12">
		<h1 class="text-center text-uppercase">productos</h1>
        <a href="productos_web.php">
            <div class="col-md-4 tecno-item text-center">
			<img src="public/images/appweb-ico.png" class="img-responsive" height="200" width="200">
			<p class="text-uppercase"><b>Aplicaciones Web y Escritorio</b></p>
			<p class="">Desarrolladas con las últimas tecnologías y estandares para que tengas aplicaciones de gran calidad y rendimiento</p>
		    </div>
        </a>
        <a href="productos_movil.php">
            <div class="col-md-4 tecno-item text-center">
                <img src="public/images/appmovil-ico.png" class="img-responsive" height="200" width="200">
                <p class="text-uppercase"><b>Aplicaciones Móviles</b></p>
                <p class="">Aplicaciones nativas para los principales sistemas operativos de la actualidad como Android e iOS</p>
            </div>
        </a>
        <a href="productos_propietario.php">
            <div class="col-md-4 tecno-item text-center">
                <img src="public/images/erp.png" class="img-responsive" height="200" width="200">
                <p class="text-uppercase"><b>Software Propietario</b></p>
                <p> Realizado por nosotros con el mayor detalle y calidad para ofrecerte un producto de gran nivel que son necesarios para el desarrollo y gestión de tu empresa</p>
            </div>
        </a>
	</div>
</div>


<div class="div-projects" id="proyectos">
	<div class="container">
	<h1 class="text-center text-uppercase">proyectos</h1>
		<ul class="portfolio-filter text-center">
	    <li><button class="btn btn-boxapp is-checked" data-filter="*">Todos Los Proyectos</button></li>
	    <li><button class="btn btn-boxapp " data-filter=".web">P&aacute;ginas Web</button></li>
	    <li><button class="btn btn-boxapp " data-filter=".movil">Apps Móviles</button></li>
	    <li><button class="btn btn-boxapp " data-filter=".erp-portfolio">Clientes de Nuestro ERP</button></li>
	    <li><button class="btn btn-boxapp " data-filter=".custom-software">Software Personalizado</button></li>
	  </ul><!--/#portfolio-filter-->
	</div>
	<div class="container">      
    <div class="portfolio-items">
        <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive portfolio-item-img" src="public/images/portfolio/azachian.png" alt="">
                <div class="overlay text-center">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://www.azachian.cl" target="_blank">Azachian</a></h3>
<!--                        <p>Portal informativo acerca de los Terapistas y sus Consultas</p>-->
                    </div>
                    <a class="preview" href="http://www.azachian.cl" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item erp-portfolio col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/alogistica.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="javascript:void(0)">Alogística</a></h3>
                        <!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="javascript:void(0)" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item erp-portfolio col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/logo-web-rally.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="javascript:void(0)">Rally Limitada</a></h3>
                        <!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="javascript:void(0)" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive portfolio-item-img" src="public/images/portfolio/afachile.png" alt="">
                <div class="overlay text-center">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://www.afa-chile.cl" target="_blank">Afa-Chile</a></h3>
<!--                        <p>Portal informativo de la empresa, adicionalmente se habilit&oacute; boton de pago</p>-->
                    </div>
                    <a class="preview" href="http://www.afa-chile.cl" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item erp-portfolio col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/suzukivalde.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="javascript:void(0)">Suzuki Valderrama</a></h3>
                        <!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="javascript:void(0)" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/abal.png" alt="">
                <div class="overlay">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://www.comercialabal.cl" target="_blank">Comercial Abal</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://www.comercialabal.cl" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3 custom-software">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/logo-clinica-everest.png" alt="" style="top:0; margin: auto">
                <div class="overlay text-center">
                    <div class="recent-work-inner">
                        <h3><a href="javascript:void(0)">Clinica Everest Gestión</a></h3>
                        <!-- <p>Clinica Dental que lleva el control de sus suministros</p> -->
                         <a class="preview" href="javascript:void(0)" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/limchile.png" alt="">
                <div class="overlay text-center">
                    <div class="recent-work-inner">
                        <h3><a href="https://www.limchile.cl" target="_blank">Limchile</a></h3>
<!--                        <p>Página web de la Empresa con un modulo de noticias administrable por el cliente para poder crear, editar y eliminar las mismas</p>-->
                        <a class="preview" href="http://cromocar.cl" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/cromocar.png" alt="">
                <div class="overlay">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://cromocar.cl">Cromocar</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://cromocar.cl" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/conceptlighting.png" alt="">
                <div class="overlay">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://conceptlighting.cl" target="_blank">Concept Lighting</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://conceptlighting.cl" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/fsn.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="https://www.fsn.cl" target="_blank">FSN</a></h3>
                        <!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="https://www.fsn.cl" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item erp-portfolio col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/todofreno.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="javascript:void(0)">Todofreno</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="javascript:void(0)" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 movil">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/LogoZonaGPS_2.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="https://play.google.com/store/apps/details?id=cl.zonagps.zonaventagps&hl=es" target="_blank">Zona GPS</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="https://play.google.com/store/apps/details?id=cl.zonagps.zonaventagps&hl=es" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 movil">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/facilici.jpg" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="https://play.google.com/store/apps/details?id=com.facilici.facilicimovil&hl=es" target="_blank">Facilici</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="https://play.google.com/store/apps/details?id=com.facilici.facilicimovil&hl=es" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/alogistica.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://www.alogistica.cl/" target="_blank">Alogística</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://www.alogistica.cl/" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/eleocolor.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://www.eleocolor.cl/" target="_blank">Eleocolor</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://www.eleocolor.cl/" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/eleocolor.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://www.eleocolor.cl/" target="_blank">Eleocolor</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://www.eleocolor.cl/" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/esmaltadoprofesional.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://www.esmaltadoprofesional.cl/" target="_blank">Esmaltado Profesional</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://www.esmaltadoprofesional.cl/" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/fardo.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://www.fardo.cl/" target="_blank">FARDO</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://www.fardo.cl/" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/restauraciondetinas.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://www.restauraciondetinas.cl/" target="_blank">Restauración de Tinas</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://www.restauraciondetinas.cl/" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/iccingenieria.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://iccingenieria.cl/" target="_blank">Ingeniería y Construcción Chile Ltda.</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://iccingenieria.cl/" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/suzukivalderrama.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://www.suzukivalderrama.cl/" target="_blank">Suzuki Valderrama</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://www.suzukivalderrama.cl/" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/vipcar.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://www.vipcar.cl/" target="_blank">VIPCAR Taller Mecánico</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://www.vipcar.cl/" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/veterinariasanmarcos.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="http://veterinariasanmarcos.cl/" target="_blank">Veterinaria San Marcos</a></h3>
<!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="http://veterinariasanmarcos.cl/" target="_blank" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3 erp-portfolio">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/abal.png" alt="" style="top:0; margin: auto">
                <div class="overlay text-center">
                    <div class="recent-work-inner">
                        <h3><a href="javascript:void(0)">Comercial Abal</a></h3>
                        <!-- <p>Clinica Dental que lleva el control de sus suministros</p> -->
                        <a class="preview" href="javascript:void(0)" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3 erp-portfolio">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/ecouadio.png" alt="" style="top:0; margin: auto">
                <div class="overlay text-center">
                    <div class="recent-work-inner">
                        <h3><a href="javascript:void(0)">Ecoaudio</a></h3>
                        <!-- <p>Clinica Dental que lleva el control de sus suministros</p> -->
                        <a class="preview" href="javascript:void(0)" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 custom-software">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/alogistica.png" alt="" style="top:0; margin: auto">
                <div class="overlay ">
                    <div class="recent-work-inner text-center">
                        <h3><a href="javascript:void(0)">Alogística WMS</a></h3>
                        <!--                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>-->
                        <a class="preview" href="javascript:void(0)" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3 custom-software">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/sumitomo.png" alt="">
                <div class="overlay text-center">
                    <div class="recent-work-inner">
                        <h3><a href="javascript:void(0)">Sumitomo Rubber Latin America Facturación Just / Japón</a></h3>
                        <!-- <p>Clinica Dental que lleva el control de sus suministros</p> -->
                        <a class="preview" href="javascript:void(0)" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3 custom-software">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/logos/vipcar.png" alt="" style="top:0; margin: auto">
                <div class="overlay text-center">
                    <div class="recent-work-inner">
                        <h3><a href="javascript:void(0)">VIPCAR Taller Mecánico</a></h3>
                        <!-- <p>Clinica Dental que lleva el control de sus suministros</p> -->
                        <a class="preview" href="javascript:void(0)" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->





      </div><!-- portfolio-items -->
		</div><!-- container -->
</div><!-- div-projects -->

<div class="container-fluid div-erp" id="erpdiv">
    <!-- agregamos el form -->
    <?php
        include "erp_form.php";
        include "erp_carac_model.html";
    ?>
	<div class="container erp-text text-center">
		<h1 class="text-uppercase">Boxapp ERP</h1>
		<h3>Administra y Gestiona tu Empresa con Nuestro Software Desarrollado a tus Necesidades</h3>
        <button class="btn btn-lg btn-boxapp-black" data-toggle="modal" data-target="#modalErp">Contacta con Nosotros</button>
        <button class="btn btn-lg btn-boxapp-transparent" data-toggle="modal" data-target="#modal-erp-carac">Ver Características</button>
	</div>
</div>

<div class="container div-tecno" id="tecnologia">
	<div class="col-md-12">
		<h1 class="text-center text-uppercase">Tecnologías</h1>
        <ul id="slider" class="gallery content-slider">
            <li>
                <img src="public/images/phplogo.png" class="img-responsive" height="200" width="200">
            </li>
            <li>
                <img src="public/images/android-logo.jpg" class="img-responsive" height="200" width="200">
            </li>
            <li>
                <img src="public/images/angularjs-logo.png" class="img-responsive" height="200" width="200">
            </li>
            <li>
                <img src="public/images/java-logo.png" class="img-responsive" height="200" width="200">
            </li>
            <li>
                <img src="public/images/Cplus2.png" class="img-responsive" height="200" width="200">
            </li>
            <li>
                <img src="public/images/net_logo.png" class="img-responsive" height="200" width="200">
            </li>
        </ul>
	</div>
</div>


<div class="container-fluid div-contact" id="contacto">
<h1 class="text-center text-uppercase col-md-offset-6">Contáctanos</h1>
	<form class="text-center contact-form" method="post" action="enviocontacto.php" id="contact-form">
		<div class="form-group col-md-6 col-md-offset-6">
			<input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-6">
			<input class="form-control" type="text" name="apellido" placeholder="Apellido">
		</div>
		<div class="form-group col-md-6 col-md-offset-6">
			<input class="form-control" type="text" name="asunto" placeholder="Asunto" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-6">
			<input class="form-control" type="text" name="tlf" placeholder="Teléfono">
		</div>
		<div class="form-group col-md-6 col-md-offset-6">
			<input class="form-control" type="email" name="email" placeholder="Correo Electrónico" required>
		</div>
		<div class="form-group col-md-6 col-md-offset-6">
			<textarea class="form-control" name="comentarios" rows="5" placeholder="Comentarios..." required></textarea>
		</div>
        <div>
            <input type="hidden" value="contact" name="formContact">
        </div>
		<div class="col-md-offset-6">
			<input type="submit" class="btn btn-boxapp btn-lg" name="Enviar Consulta">
		</div>
	</form>
</div>


<!-- agregamos el footer -->
<?php 
	include "includes/footer.html"
?>