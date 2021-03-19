

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Actualizar Datos!</h1>
                        </div>
                        <form class="user">
                            <div class="form-group ">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"  name="txtnombre" id="exampleFirstName"
                                    placeholder="Nombre">
                            </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="txtappaterno"
                                     id="exampleLastName" placeholder="Apellido Paterno">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="txtapmaterno"
                                     id="exampleLastName" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="txtcorreo" id="exampleInputEmail"
                                    placeholder="Correo Electronico">
                            </div>
                            <a href="<?= base_url('Registro/actualizarDatos') ?>" class="btn btn-primary btn-user btn-block">
                                Actualizar Registro
                            </a>
                            <hr>
                            <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Eliminar ID!</h1>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="txtidpersona"
                                        id="exampleInputidpersona" placeholder="ID">
                                </div>
                            </div>
                            <a href="<?= base_url('Registro/eliminarPersona') ?>" class="btn btn-google btn-user btn-block">
                                <i class=""></i> Eliminar ID
                            </a>
                            
                        </form>
                        <hr>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>