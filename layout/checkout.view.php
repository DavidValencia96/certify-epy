
<form id="paymentCheckout" class="needs-validation" novalidate>
    
    <div id="dataCheckout" class="row">

        <!-- publicKey -->
        <div class="col-md-5 mb-1">
                <div class="input-group">
                    <span class="input-group-text" for="publicKey">Llave publica</span>
                    <input name="publicKey" id="publicKey" class="form-control" type="text" value="" placeholder="LLave publica" required/>
                    <div class="invalid-feedback">
                        <label style="color: white">Ingrese su public_key</label>
                        <label>*</label>
                    </div>
                </div>
        </div>
        <hr>


        <!-- descripcion -->
        <div class="col-md-5 mb-1">
            <div class="input-group">
                <span class="input-group-text" for="description">Descripción</span>
                <input name="description" id="description" class="form-control" type="text" value="Pago de prueba ePayco" placeholder="Descripción de pago" required/>
                <div class="invalid-feedback">
                    <label style="color: white">Ingrese la descripción</label>
                    <label>*</label>
                </div>
            </div>
        </div>


        <!-- amount -->
        <div class="col-md-2 mb-1">
           <div class="input-group" >
               <span class="input-group-text" for="amount">Total $</span>
               <input name="amount" id="amount" class="form-control" type="number" value="40" />
               <div class="invalid-feedback">
                   <label style="color: white">Ingrese un monto correcto</label>
                   <label>*</label>
               </div>
           </div>
        </div>


        <!-- iva -->
        <div class="col-md-2 mb-1">
            <div class="input-group" >
                <span class="input-group-text" for="iva">Iva $</span>
                <input name="tax" id="tax" class="form-control" type="number" value="0" />
                <div class="invalid-feedback">
                    <label style="color: white">Ingrese un IVA</label>
                    <label>*</label>
                </div>
            </div>
        </div>


        <!-- neto -->
        <div class="col-md-2 mb-1">
            <div class="input-group" >
                <span class="input-group-text" for="neto">Neto $</span>
                <input name="tax_base" id="tax_base" class="form-control" type="number" value="0" />
                <div class="invalid-feedback">
                    <label style="color: white">Ingrese un neto</label>
                    <label>*</label>
                </div>
            </div>
        </div>
        <hr>


        <!-- Selector tipo moneda -->
        <div class="col-md-2">
            <select id="currency" onchange="checkoutEpayco()" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                <option selected disabled value="">Currency</option>
                <option value="USD">USD</option>
                <option value="COP">COP</option>
            </select>

            <div class="invalid-feedback">
                <label style="color: white">Seleccione una opción</label>
                <label>*</label>
            </div>
        </div>

            
        <!-- Selector tipo checkout -->
        <div class="col-md-2">
            <select id="typeCheckout" onchange="checkoutEpayco()" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                <option selected disabled value="">Tipo checkout</option>
                <option value="true">Standar checkout</option>
                <option value="false">OnePage checkout</option>

            </select>
            <div class="invalid-feedback">
                <label style="color: white">Seleccione una opción</label>
                <label>*</label>
            </div><br>
        </div>


        <!-- Selector metodo POST / GET -->
        <div class="col-md-2">
            <select id="typeMethod" onchange="checkoutEpayco()" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                <option selected disabled value="">Metodo confirmación</option>
                <option value="POST">POST</option>
                <option value="GET">GET</option>
            </select>

            <div class="invalid-feedback">
                <label style="color: white">Seleccione una opción</label>
                <label>*</label>
            </div>
        </div>


        <!-- Selector lenguaje -->
        <div class="col-md-2">
            <select id="typelang" onchange="checkoutEpayco()" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                <option selected disabled value="">Lenguaje</option>
                <option value="es">Español</option>
                <option value="en">Ingles</option>
            </select>

            <div class="invalid-feedback">
                <label style="color: white">Seleccione una opción</label>
                <label>*</label>
            </div>
        </div>
        <hr>


        <!-- urlConfirmacion -->
        <div class="col-md-5 mb-1">
            <div class="input-group">
                <span class="input-group-text" for="urlConfirmacion">URL Confirmación</span>
                <input name="urlConfirmacion" id="urlConfirmacion" class="form-control" type="text" value="" placeholder="Su url de página confirmación" required/>
                <div class="invalid-feedback">
                    <label style="color: white">Ingrese una URL valida</label>
                    <label>*</label>
                </div>
            </div>
        </div>         
            

        <!-- urlRespuesta -->
        <div class="col-md-5 mb-1">
            <div class="input-group">
                <span class="input-group-text" for="urlRespuesta">URL Respuesta</span>
                <input name="urlRespuesta" id="urlRespuesta" class="form-control" type="text" value="" placeholder="Su url de página respuesta" required/>
                <div class="invalid-feedback">
                    <label style="color: white">Ingrese una URL valida</label>
                    <label>*</label>
                </div>
            </div>
        </div>

    </div>
    
    <br>
    <!-- <button disabled class="btn btn-success btn-sm" type="submit" id="payment">Pagar</button> -->
    <button class="btn btn-success btn-sm" type="submit" onclick="checkoutEpayco()" id="paymentEpayco">Pagar ahora</button>
</form>