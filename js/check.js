// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation1')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()


$(document).ready(function(){

    function habilitarBotonPayment(){

        let currency = document.getElementById('currency');
        let optionCurrency = currency.value;

        let typeCheckout = document.getElementById('typeCheckout');
        let optionCheckout = typeCheckout.value;

        let typeMethod = document.getElementById('typeMethod');
        let optionMethod = typeMethod.value;

        let typelang = document.getElementById('typelang');
        let optionLang = typelang.value;

        publicKey = document.getElementById("publicKey").value;
        description = document.getElementById("description").value;
        amount = document.getElementById("amount").value;
        tax = document.getElementById("tax").value;
        tax_base = document.getElementById("tax_base").value;

        val = 0;
    
        if(optionCurrency == ""){
            val++;
        }
        if(optionCheckout == ""){
            val++;
        }
        if(optionMethod == ""){
            val++;
        }
        if(optionLang == ""){
            val++;
        }
        if(publicKey == ""){
            val++;
        }
        if(description == ""){
            val++;
        }
        if(amount == ""){
            val++;
        }
        if(tax == ""){
            val++;
        }
        if(tax_base == ""){
            val++;
        }

        if (val == 0){
            document.getElementById('paymentEpayco').disabled = false;
        } else {
            document.getElementById('paymentEpayco').disabled =true;
        }
    }
    
    document.getElementById("optionCurrency").addEventListener("keyup",habilitarBotonPayment);
    document.getElementById("optionCheckout").addEventListener("keyup",habilitarBotonPayment);
    document.getElementById("optionMethod").addEventListener("keyup",habilitarBotonPayment);
    document.getElementById("optionLang").addEventListener("keyup",habilitarBotonPayment);
    document.getElementById("publicKey").addEventListener("keyup",habilitarBotonPayment);
    document.getElementById("description").addEventListener("keyup",habilitarBotonPayment);
    document.getElementById("amount").addEventListener("keyup",habilitarBotonPayment);
    document.getElementById("tax").addEventListener("keyup",habilitarBotonPayment);
    document.getElementById("tax_base").addEventListener("keyup",habilitarBotonPayment);
    document.getElementById("paymentEpayco").addEventListener("click", ()=>{
        
    });



});