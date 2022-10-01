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

<!-- Icon  -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
</svg>

<!-- texto data nombre, franquicias, red -->
<div class="row" >

    <!-- Comentario CRM -->
    <div class="col-md-4">
        <label for="dataCommerce"><b>Comentario CRM:</b> <code id="typeKickoff"></code></label>
        <textarea style="height: 100px" id="respuestaCRM" class="form-control"></textarea>
        <div class="row mt-1">
            <div class="col-md-3">
                <button id="mostrarAlert1" onclick="copyTextCRM();" class="mt-1 btn btn-success">Copiar</button>
            </div>
            <div id="alert1" class=" mt-1 col-md-6" >
                <div  width="50" class="alert alert-success d-flex align-items-center alert3" role="alert" >
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div >copiado !</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Comentario respuesta certificaciones -->
    <div class="col-md-4">
        <label for="dataCommerce"><b>Responder correo a certificaciones:</b></label>
        <textarea  style="height: 100px" id="respuestaCertificaciones" class="form-control"></textarea>
        <div class="row mt-1">
            <div class="col-md-3">
                <button id="mostrarAlert2" onclick="copyTexCertificaciones();" class="mt-1 btn btn-success">Copiar</button>
            </div>
            <div id="alert2" class=" mt-1 col-md-6" >
                <div  width="50" class="alert alert-success d-flex align-items-center alert3" role="alert" >
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div >Copiado !</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- correo kick off -->
    <div class="col-md-4">
        <label for="dataCommerce"><b>Correo Kick-off:</b></label>
        <textarea style="height: 100px" id="respuesta" class="form-control"></textarea>

        <div class="row mt-1">
            <div class="col-md-3">
                <button id="mostrarAlert3" onclick="copyTextKickOff();" class="mt-1 btn btn-success">Copiar</button>
            </div>
            <div id="alert3" class=" mt-1 col-md-6" >
                <div  width="50" class="alert alert-success d-flex align-items-center alert3" role="alert" >
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div >Copiado !</div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<!-- Boton descargar archivo -->
<div>
    <p>Descargar archivo de "Acta de salida a producción ePayco"
        <a href="./doc/acta-salida-a-produccion.docx" download="acta-epayco">
            <img src="./img/file.png" alt="file" width="50" height="50">
        </a>
    </p>
    <article class="mb-3 mt-2">
        <code>
            <a href="./doc/acta-salida-a-produccion.docx" 
                download="Acta de salida a produccón ePayco">
                
            </a>
        </code>
    </article>
</div>
<br>
<br>
</div>