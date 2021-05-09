<?php

require_once 'header.php';
?>

<div class="row justify-content-center">
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-6 col-xlg-9 col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Nombre Completo</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Johnathan Doe" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Correo Electrónico</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="email" placeholder="johnathan@admin.com"
                                        class="form-control p-0 border-0" name="example-email" id="example-email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Fecha de Nacimiento</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="email" placeholder="05/05/12"
                                        class="form-control p-0 border-0" name="example-email" id="fechnac">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Contraseña</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="password" value="password" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Teléfono</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="64857986" class="form-control p-0 border-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">CI</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="10381505" class="form-control p-0 border-0">
                                </div>
                            </div>                            
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Código Postal</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="00000" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Fecha de Contratación</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="05/05/12" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Ciudad</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Sucre" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">País</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="Bolivia" class="form-control p-0 border-0">
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Actualizar Datos</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

<?php
require_once 'footer.php';


?>