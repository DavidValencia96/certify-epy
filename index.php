<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>ST ePayco</title>
</head>
<body class="fondo1">
    
    <div class="container-fluid mt-1">
        <div class="row">
            <!-- <div class="col-8 offset-2"> -->
            <div class="col-12">
                <form id="formulario" class="row g-3 p-3 mt-2 shadow border" >
                    <!-- titulo -->
                    <div class="tituloEpayco">
                        <h2 class="text-left float-start">Certificaciones Soporte técnico</h2>
                        <img class="text-left float-end" height="80px" src="./img/01_negro.svg" alt="">
                    </div>

                    <!-- Selectores alianza, red y franquicia -->
                    <div class="row">
                        <!-- Selector Alianza -->
                        <div class="col-md-2">
                            <select id="alianza" onchange="selecionarAlianza()" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Alianza</option>
                                <option value="jelpit">Jelpit</option>
                                <option value="adquirencia">Adquirencia Móvil</option>
                                <option value="alianzaDavivenda">Alianza Davivenda</option>
                                <option value="normal">Kick-off Normal</option>
                            </select>
                        </div>

                        <!-- Selector Red -->
                        <div class="col-md-2">
                            <select id="redProcesamiento" onchange="selecionarAlianza()" class="form-select form-select-sm " aria-label=".form-select-sm example">
                                <option selected>Red</option>
                                <option value="PSE">PSE</option>
                                <option value="Redeban">Redeban</option>
                                <option value="Credibanco">Credibanco</option>
                            </select>
                        </div>

                        <!-- Selector Franquicia -->
                        <div class="col-md-7">
                            <div id="franquiciasCredito" class=" row">
                                <div class="form-check form-switch col-md-2">
                                    <input class="form-check-input valores"  type="checkbox" id="visa" name="franquicias" value="Visa">
                                    <label class="form-check-label" for="Visa">Visa</label>
                                </div>
                                <div class="form-check form-switch col-md-2">
                                    <input class="form-check-input valores" type="checkbox" id="masterCard" name="franquicias" value="MasterCard">
                                    <label class="form-check-label" for="MasterCard">MasterCard </label>
                                </div>
                                <div class="form-check form-switch col-md-2">
                                    <input class="form-check-input  valores" type="checkbox" id="dinners" name="franquicias" value="Dinners">
                                    <label class="form-check-label" for="Dinners">Dinners</label>
                                </div>
                                <div class="form-check form-switch col-md-3">
                                    <input class="form-check-input valores" type="checkbox" id="americanExpress" name="franquicias" value="American Express">
                                    <label class="form-check-label" for="American Express">American Express</label>
                                </div>
                                <div class="form-check form-switch col-md-2">
                                    <input class="form-check-input valores" type="checkbox" id="credencial" name="franquicias" value="Credencial">
                                    <label class="form-check-label" for="Credencial">Credencial</label>
                                </div>

                                <code id="error-message"></code>
                            </div>
                        </div>
                    </div>

                    <!-- Imputs ingresar datos -->
                    <label for="dataCommerce"><b>Datos del comercio:</b></label>
                    <div id="datosComercio1" class="row">
                        <div class="col-md-2">
                            <input name="idComercio" id="idComercio" class="form-control my-2" type="number" placeholder="ID comercio">
                        </div>
                        <div class="col-md-5">
                            <input required name="nombre" id="nombre" class="form-control my-2" type="text" placeholder="Nombre del comercio" >
                        </div>
                        <div class="col-md-5">
                            <input required name="correo" id="correo" class="form-control my-2 " type="email" placeholder="Correo del comercio" >
                        </div>
                    </div>

                    <!-- Boton imprimir -->
                    <div class="d-grid gap-2 d-md-block mt-0">
                      <button class="btn btn-secondary btn-sm mt-1" type="submit" id="boton" onclick="ocultar()">Generar</button>
                    </div>
                
                    <hr>

                    <!-- Data impresa -->
                    <div class="mt-0">

                        <!-- Red y asunto  -->
                        <div class="row">
                            <label><b>Red de procesamiento:</b>  <code id="respuestaRed"></code></label>
                            <label class="mt-1"><b>Correos a notificar: </b></label>
                                <code id="correosNotificacion"></code>
                            <label class="mt-1"><b>Correos copia:</b></label>
                                <code disabled id="correosNotificacionCopia"></code>
                            <label class="mt-1"><b>Asunto Correo: </b><code id="respuestaAsunto"></code></label>
                        </div>
                        <hr>

                        <!-- texto data nombre, franquicias, red -->
                        <div class="row" >
                            <div class="col-md-4">
                                <label for="dataCommerce"><b>Comentario CRM:</b> <code id="typeKickoff"></code></label>
                                <textarea disabled style="height: 200px" id="respuestaCRM" class="form-control"></textarea>
                            </div>

                            <div class="col-md-4">
                                <label for="dataCommerce"><b>Responder correo a certificaciones:</b></label>
                                <textarea disabled style="height: 200px" id="respuestaCertificaciones" class="form-control"></textarea>
                            </div>

                            <div class="col-md-4">
                                <label for="dataCommerce"><b>Correo Kick-off:</b></label>
                                <textarea disabled style="height: 200px" id="respuesta" class="form-control"></textarea>
                            </div>

                        </div>
                        <hr>

                        <!-- Boton descargar archivo -->
                        <div>
                            <article class="mb-3 mt-2">
                                <section>
                                    <a href="./doc/acta-salida-a-produccion.docx" 
                                        download="Acta de salida a produccón ePayco">
                                        Descargar archivo de "Acta de salida a producción ePayco"
                                    </a>
                                </section>
                            </article>
                        </div>
                        <br>
                        <br>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
    <script src="./js/data.js"></script>
</body>
</html>


