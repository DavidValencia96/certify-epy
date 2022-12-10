<div class="row mt-0">
    <!-- Selector Alianza -->
    <div class="col-md-2">
        <select id="alianza" onchange="selecionarAlianza()" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
            <option selected disabled value="">Alianza</option>
            <option value="jelpit">Jelpit</option>
            <option value="adquirencia">Adquirencia Móvil</option>
            <option value="alianzaDavivenda">Alianza Davivenda</option>
            <option value="normal">Kick-off Normal</option>
        </select>
        <div class="invalid-feedback">
            <label style="color: white">Seleccione una alianza</label>
            <label>*</label>
            
        </div>
    </div>

     <!-- Selector Red -->
     <div class="col-md-2">
         <select id="redProcesamiento" onchange="selecionarAlianza()" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
             <option selected disabled value="">Red de procesamiento</option>
             <option value="PSE">PSE</option>
             <option value="Redeban">Redeban</option>
             <option value="Credibanco">Credibanco</option>
             <option value="Daviplata">Daviplata</option>
         </select>
         <div class="invalid-feedback">
            <label style="color: white">Seleccione una Red</label>
            <label>*</label>
         </div>
     </div>

    <!-- Selector Franquicia -->
    <div class="col-md-7">
        <div id="franquiciasCredito" class=" row">
            <div class="form-check form-switch col-md-2">
                <input class="form-check-input valores"  type="checkbox" id="visa" name="franquicias" value="Visa">
                <label class="form-check-label" for="Visa">Visa</label>
            </div>
            <div class="form-check form-switch col-md-3">
                <input class="form-check-input valores" type="checkbox" id="masterCard" name="franquicias" value="MasterCard">
                <label class="form-check-label" for="MasterCard">MasterCard</label>
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
                <code style="color:white" id="error-message">Seleccionar solo en Credibanco o Redeban</code>
                <label style="color:red">*</label>
            </div>
        </div>
    </div>
</div>