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

});