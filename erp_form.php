<?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <?php include "enviocontacto.php"?>



<?php else:  ?>
    <!-- Modal -->
    <div class="modal fade" id="modalErp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-uppercase" id="myModalLabel">Consulta ERP</h4>
                </div>
                <div class="modal-body div-contact">
                    <form method="post" action="" id="erp-form">
                        <div class="form-group ">
                            <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="form-group ">
                             <input class="form-control" type="text" name="apellido" placeholder="Apellido" required>
                        </div>
                        <div class="form-group  ">
                            <input class="form-control" type="text" name="asunto" placeholder="Asunto" required>
                        </div>
                        <div class="form-group ">
                            <input class="form-control" type="text" name="tlf" placeholder="Teléfono" required>
                        </div>
                        <div class="form-group ">
                            <input class="form-control" type="email" name="email" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="form-group ">
                            <textarea class="form-control" name="comentarios" rows="5" placeholder="Comentarios..."></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-boxapp btn-lg" name="Enviar Consulta">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif;  ?>
