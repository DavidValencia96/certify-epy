<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/favicon.png">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>ST ePayco</title>
</head>
<body class="fondo1">
    
    <div class="container-fluid mt-1">
        <div class="row">
            <!-- <div class="col-8 offset-2"> -->
            <div class="col-12">
                <form id="formulario" class="row g-3 p-3 mt-1 shadow border" >
                    <!-- titulo -->
                    <div class="tituloEpayco">
                        <img class=" float-end" height="60px" src="./img/01_negro.svg" alt="logo-epayco">
                        <div class="row float-start" onload="actualizarHora()">
                            <h2 class="text-start">Certificaciones Soporte técnico</h2>
                            <code id="timeActually" class="text-start"></code>
                        </div>
                    </div>
                    <hr>
                    <!-- Selectores alianza, red y franquicia -->
                    <div class="row mt-0">
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
                                <div>

                                    <code id="error-message"></code>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Imputs ingresar datos -->
                    <div class="text-dataEcommerce">
                        <label for="dataCommerce" ><b>Datos del comercio:</b></label>
                        <div id="datosComercio1" class="row">
                            <div class="col-md-2">
                                <input name="idComercio" id="idComercio" class="form-control my-2" type="number" placeholder="ID comercio" value="123456">
                            </div>
                            <div class="col-md-5">
                                <input required name="nombre" id="nombre" class="form-control my-2" type="text" placeholder="Nombre del comercio" value="david valencia">
                            </div>
                            <div class="col-md-5">
                                <input required name="correo" id="correo" class="form-control my-2 " type="email" placeholder="Correo del comercio" value="juan@juan.com">
                            </div>
                        </div>
                    </div>

                    <!-- Boton imprimir -->
                    <div class="d-grid gap-2 d-md-block mt-0">
                      <button class="btn btn-secondary btn-sm mt-1" type="submit" id="boton">Generar</button>
                    </div>
                
                    <hr>

                    <!-- Data impresa -->
                    <div class="mt-0">

                        <!-- Red y asunto  -->
                        <div class="row mt-0">
                            <label hidden><b>Red de procesamiento:</b>  <code id="respuestaRed"></code></label>
                            <label class="mt-1"><b>Correos a notificar: </b></label>
                                <code id="correosNotificacion"></code>
                            <label class="mt-1"><b>Correos copia:</b></label>
                                <code disabled id="correosNotificacionCopia"></code>
                            <label class="mt-1"><b>Asunto Correo: </b><code id="respuestaAsunto"></code></label>
                        </div>
                        <hr>

                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </symbol>
                        </svg>

                        <!-- texto data nombre, franquicias, red -->
                        <div class="row" >

                            <!-- Comentario CRM -->
                            <div class="col-md-4">
                                <div id="alert1" >
                                    <div class="alert alert-success d-flex align-items-center alert3" role="alert" >
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                        <div >Texto copiado !</div>
                                    </div>
                                </div>
                                <label for="dataCommerce"><b>Comentario CRM:</b> <code id="typeKickoff"></code></label>
                                <textarea style="height: 100px" id="respuestaCRM" class="form-control"></textarea>
                                <button id="mostrarAlert1" onclick="copyTextCRM();" class="mt-1 btn btn-success">Copiar texto</button>
                            </div>

                            <!-- Comentario respuesta certificaciones -->
                            <div class="col-md-4">
                                <div id="alert2" >
                                    <div class="alert alert-success d-flex align-items-center alert3" role="alert" >
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                        <div >Texto copiado !</div>
                                    </div>
                                </div>
                                <label for="dataCommerce"><b>Responder correo a certificaciones:</b></label>
                                <textarea  style="height: 100px" id="respuestaCertificaciones" class="form-control"></textarea>
                                <button id="mostrarAlert2" onclick="copyTexCertificaciones();" class="mt-1 btn btn-success">Copiar texto</button>
                            </div>
                            
                            <!-- correo kick off -->
                            <div class="col-md-4">
                                <div id="alert3" >
                                    <div class="alert alert-success d-flex align-items-center alert3" role="alert" >
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                        <div >Texto copiado !</div>
                                    </div>
                                </div>

                                <label for="dataCommerce"><b>Correo Kick-off:</b></label>
                                <textarea style="height: 100px" id="respuesta" class="form-control"></textarea>
                                <button id="mostrarAlert3" onclick="copyTextKickOff();" class="mt-1 btn btn-success">Copiar texto</button>
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
    <script src="./js/function.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
</body>
</html>


