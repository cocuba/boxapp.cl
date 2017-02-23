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

<div class="container-fluid div-productos">
	<div class="col-md-12">
		<h1 class="text-center text-uppercase">productos</h1>
		<div class="col-md-4 tecno-item text-center">
			<img src="public/images/appweb-ico.png" class="img-responsive" height="200" width="200">
			<p class="text-uppercase text"><b>Aplicaciones Web y Escritorio</b></p>
			<p class="">Desarrolladas con las últimas tecnologías y estandares para que tengas aplicaciones de gran calidad y rendimiento</p>
		</div>
		<div class="col-md-4 tecno-item text-center">
			<img src="public/images/appmovil-ico.png" class="img-responsive" height="200" width="200">
			<p class="text-uppercase text"><b>Aplicaciones Móviles</b></p>
			<p class="">Aplicaciones nativas para los principales sistemas operativos de la Actualidad como Android e iOS</p>
		</div>
		<div class="col-md-4 tecno-item text-center">
			<img src="public/images/boxapplogo-inverted.png" class="img-responsive" height="200" width="200" style="margin-top: 28%;">
			<p class="text-uppercase text"><b>Boxapp ERP</b></p>
			<p> Un ERP hecho por nosotros que toma en cuenta tus requisitos que son necesarios para el desarrollo y gestión de tu empresa</p>
		</div>
	</div>
</div>


<div class="div-projects">
	<div class="container">
	<h1 class="text-center text-uppercase">proyectos</h1>
		<ul class="portfolio-filter text-center">
	    <li><button class="btn btn-boxapp is-checked" data-filter="*">Todos Los Proyectos</button></li>
	    <li><button class="btn btn-boxapp " data-filter=".web">P&aacute;ginas Web</button></li>
	    <li><button class="btn btn-boxapp " data-filter=".android">Apps Móviles</button></li>
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

        <div class="portfolio-item col-xs-12 col-sm-4 col-md-3 android">
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

        <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                <div class="overlay">
                    <div class="recent-work-inner">
                        <h3><a href="#">Business theme</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                    </div>
                </div>
            </div>
        </div><!--/.portfolio-item-->

        <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
            <div class="recent-work-wrap">
                <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                <div class="overlay">
                    <div class="recent-work-inner">
                        <h3><a href="#">Business theme</a></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                        <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
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

<div class="container-fluid div-erp">
	<div class="container erp-text text-center">
		<h1 class="text-uppercase">Boxapp ERP</h1>
		<h3>Administra y Gestiona tu Empresa con Nuestro Software Desarrollado a tus Necesidades</h3>
		<a href="" class="btn btn-lg btn-boxapp-black">Contacta con Nosotros</a>
		<a href="" class="btn btn-lg btn-boxapp-transparent">Ver Demo</a>
	</div>
</div>

<div class="container div-tecno">
	<div class="col-md-12">
		<h1 class="text-center text-uppercase">Tecnologías</h1>
		<div class="col-md-3 tecno-item">
			<img src="public/images/phplogo.png" class="img-responsive" height="250" width="250" style="margin-top: 10%;">
		</div>
		<div class="col-md-3 tecno-item">
			<img src="public/images/android-logo.jpg" class="img-responsive" height="200" width="200">
		</div>
		<div class="col-md-3 tecno-item">
			<img src="public/images/angularjs-logo.png" class="img-responsive" height="200" width="200">
		</div>
		<div class="col-md-3 tecno-item">
			<img src="public/images/java-logo.png" class="img-responsive" height="200" width="200">
		</div>
	</div>
</div>


<div class="container-fluid div-contact">
<h1 class="text-center text-uppercase">Contáctanos</h1>
	<form class="text-center contact-form">
		<div class="form-group">
			<input class="form-control" type="text" name="name" placeholder="Nombre">
		</div>
		<div class="form-group">
			<input class="form-control" type="text" name="apellido" placeholder="Apellido">
		</div>
		<div class="form-group">
			<input class="form-control" type="text" name="subject" placeholder="Asunto">
		</div>
		<div class="form-group">
			<input class="form-control" type="text" name="tlf" placeholder="Telefono">
		</div>
		<div class="form-group">
			<input class="form-control" type="email" name="email" placeholder="Correo Electrónico">
		</div>
		<textarea class="form-control" placeholder="Comentarios..."></textarea>
	</form>
</div>


<!-- agregamos el footer -->
<?php 
	include "includes/footer.html"
?>