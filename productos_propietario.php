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
                <h3 class="text-uppercase"> <b style="color:#029eff">Especialistas Tecnológicos!</b> somos un equipo de personas jóvenes dedicadas a cumplir las metas propuestas por los clientes.</h3>
            </div>
        </div>
        <div class="item">
            <video autoplay loop>
                <source src="public/video/background_video.mp4" type="video/mp4">
            </video>
            <!--            <img src="" alt="...">-->
            <div class="carousel-caption carousel-caption-boxapp2">
                <h3 class="text-uppercase"><b style="color:#029eff">Nuestro objetivo</b> es lograr integrar las tecnologías al mercado, al común diario y a las personas; para así  poder entregar más herramientas de desarrollo al país.</h3>
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
        <ul class="gallery content-slider slider-tec">
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
<h1 class="text-center text-uppercase">Contáctanos</h1>
	<form class="text-center contact-form" method="post" action="enviocontacto.php" id="contact-form">
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
        <div>
            <input type="hidden" value="contact" name="formContact">
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