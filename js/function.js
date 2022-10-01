$(document).ready(function(){

    let alert1 = $('#alert1').hide();
    let alert2 = $('#alert2').hide();
    let alert3 = $('#alert3').hide();


    $("#mostrarAlert1").click(function(){
        alert1.show(1000);
        alert1.hide(4000);
        // $('#alert3').hide(4000);
     });

    $("#mostrarAlert2").click(function(){
        alert2.show(1000);
        alert2.hide(4000);
        // $('#alert3').hide(4000);
     });

    $("#mostrarAlert3").click(function(){
        alert3.show(1000);
        alert3.hide(4000);
        // $('#alert3').hide(4000);
     });



     // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'
    
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
    
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
    
            form.classList.add('was-validated')
            }, false)
        })
    })()


    function habilitarBoton(){
        nombre = document.getElementById("nombre").value;
        correo = document.getElementById("correo").value;

        val = 0;
    
        if(nombre == ""){
            val++;
        }
        if(correo == ""){
            val++;
        }
    
        if (val == 0){
            document.getElementById('boton').disabled = false;
        } else {
            document.getElementById('boton').disabled =true;
        }
    }

    document.getElementById("nombre").addEventListener("keyup",habilitarBoton);
    document.getElementById("correo").addEventListener("keyup",habilitarBoton);
    document.getElementById("boton").addEventListener("click", ()=>{
        
    });



});