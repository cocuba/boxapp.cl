<!-- agregamos el header -->
<?php 
	include "includes/header.html"
?>

<div class="principal-container">
	<div class="first-banner">
		<h1>Boxapp</h1>
		<h3>Lorem Ipsum</h3>
	</div>
</div>

<div class="container-fluid div-productos" id="productos">
	<div class="col-md-12">
		<h1 class="text-center text-uppercase">productos</h1>
		<div class="col-md-4 tecno-item text-center">
			<img src="public/images/appweb-ico.png" class="img-responsive" height="200" width="200">
			<p class="text-uppercase"><b>Aplicaciones Web y Escritorio</b></p>
			<p class="">Desarrolladas con las últimas tecnologías y estandares para que tengas aplicaciones de gran calidad y rendimiento</p>
		</div>
		<div class="col-md-4 tecno-item text-center">
			<img src="public/images/appmovil-ico.png" class="img-responsive" height="200" width="200">
			<p class="text-uppercase"><b>Aplicaciones Móviles</b></p>
			<p class="">Aplicaciones nativas para los principales sistemas operativos de la actualidad como Android e iOS</p>
		</div>
		<div class="col-md-4 tecno-item text-center">
			<img src="public/images/erp.png" class="img-responsive" height="200" width="200">
			<p class="text-uppercase"><b>Boxapp ERP</b></p>
			<p> Un ERP hecho por nosotros que toma en cuenta tus requisitos que son necesarios para el desarrollo y gestión de tu empresa</p>
		</div>
	</div>
</div>


<div class="div-projects" id="proyectos">
	<div class="container">
	<h1 class="text-center text-uppercase">proyectos</h1>
		<ul class="portfolio-filter text-center">
	    <li><button class="btn btn-boxapp is-checked" data-filter="*">Todos Los Proyectos</button></li>
	    <li><button class="btn btn-boxapp " data-filter=".web">P&aacute;ginas Web</button></li>
	    <li><button class="btn btn-boxapp " data-filter=".movil">Apps Móviles</button></li>
	    <li><button class="btn btn-boxapp " data-filter=".erp-portfolio">Clientes del ERP</button></li>
	  </ul><!--/#portfolio-filter-->
	</div>
	<div class="container">      
    <div class="portfolio-items">
        <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive portfolio-item-img" src="public/images/portfolio/azachian.png" alt="">
                <div class="overlay text-center">
                    <div class="recent-work-inner">
                        <h3><a href="http://www.azachian.cl" target="_blank">Azachian</a></h3>
                        <p>Portal informativo acerca de la Terapistas y sus Consultas</p>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3 web">
            <div class="recent-work-wrap">
                <img class="img-responsive portfolio-item-img" src="public/images/portfolio/afachile.png" alt="">
                <div class="overlay text-center">
                    <div class="recent-work-inner">
                        <h3><a href="http://www.afa-chile.cl" target="_blank">Afa-Chile</a></h3>
                        <p>Portal informativo de la empresa, adicionalmente se habilit&oacute; boton de pago</p>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 movil">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                <div class="overlay">
                    <div class="recent-work-inner">
                        <h3><a href="#">Business theme</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3 erp-portfolio">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="public/images/portfolio/everest.png" alt="">
                <div class="overlay text-center">
                    <div class="recent-work-inner">
                        <h3><a href="#">Clinica Everest</a></h3>
                        <!-- <p>Clinica Dental que lleva el control de sus suministros</p> -->
                        <!-- <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a> -->
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
                        <p>Página web de la Empresa con un modulo de noticias administrable por el cliente para poder crear, editar y eliminar las mismas</p>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                <div class="overlay">
                    <div class="recent-work-inner">
                        <h3><a href="#">Business theme</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                <div class="overlay">
                    <div class="recent-work-inner">
                        <h3><a href="#">Business theme</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                <div class="overlay">
                    <div class="recent-work-inner">
                        <h3><a href="#">Business theme</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
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
	<div class="col-md-12 slider">
		<h1 class="text-center text-uppercase">Tecnologías</h1>
		<div class="col-md-3 tecno-item slide">
			<img src="public/images/phplogo.png" class="img-responsive" height="250" width="250" style="margin-top: 10%;">
		</div>
		<div class="col-md-3 tecno-item slide">
			<img src="public/images/android-logo.jpg" class="img-responsive" height="200" width="200">
		</div>
		<div class="col-md-3 tecno-item slide">
			<img src="public/images/angularjs-logo.png" class="img-responsive" height="200" width="200">
		</div>
		<div class="col-md-3 tecno-item slide">
			<img src="public/images/java-logo.png" class="img-responsive" height="200" width="200">
		</div>
	</div>
</div>


<div class="container-fluid div-contact" id="contacto">
<h1 class="text-center text-uppercase">Contáctanos</h1>
	<form class="text-center contact-form" method="post" action="">
		<div class="form-group col-md-6 col-md-offset-3">
			<input class="form-control" type="text" name="nombre" placeholder="Nombre">
		</div>
		<div class="form-group col-md-6 col-md-offset-3">
			<input class="form-control" type="text" name="apellido" placeholder="Apellido">
		</div>
		<div class="form-group col-md-6 col-md-offset-3">
			<input class="form-control" type="text" name="asunto" placeholder="Asunto">
		</div>
		<div class="form-group col-md-6 col-md-offset-3">
			<input class="form-control" type="text" name="tlf" placeholder="Teléfono">
		</div>
		<div class="form-group col-md-6 col-md-offset-3">
			<input class="form-control" type="email" name="email" placeholder="Correo Electrónico">
		</div>
		<div class="form-group col-md-6 col-md-offset-3">
			<textarea class="form-control" name="comentarios" rows="5" placeholder="Comentarios..."></textarea>
		</div> 
		<div class="col-md-12">
			<input type="submit" class="btn btn-boxapp btn-lg" name="Enviar Consulta">
		</div>
	</form>
</div>


<!-- agregamos el footer -->
<?php 
	include "includes/footer.html"
?>