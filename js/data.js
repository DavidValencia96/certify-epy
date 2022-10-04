const formulario = document.querySelector("#formulario");

//crear el evento
formulario.addEventListener( "submit", selecionarAlianza);


// Hora
function actualizarHora() {
    var date = new Date();
    year = date.getFullYear();
    hour = date.getHours();
    minutes = date.getMinutes();
    seconds = date.getSeconds();
    
    var yearActually = document.getElementById('year');
    yearActually.innerHTML = year; // formato

    var hora_actual = document.getElementById('timeActually');
    hora_actual.innerHTML = hour + "h:" + minutes + "m:" + seconds+ "s"; // formato

    // intervalo de actualización
    setTimeout("actualizarHora()",1000);
}
actualizarHora();


// funcion copiar en portapapeles
function copyTextCRM(){
    let copyTextCRM = document.getElementById('respuestaCRM');
    copyTextCRM.select();
    copyTextCRM.setSelectionRange(0, 99999);

    document.execCommand("copy");
}
function copyTexCertificaciones(){
    let copyTextCertificaciones = document.getElementById('respuestaCertificaciones');
    copyTextCertificaciones.select();
    copyTextCertificaciones.setSelectionRange(0, 99999);
    document.execCommand("copy");
}
function copyTextKickOff(){
    let copyTextKickOff = document.getElementById('respuesta');
    copyTextKickOff.select();
    copyTextKickOff.setSelectionRange(0, 99999);
    document.execCommand("copy");
}

// Ocultar listado de franquicias
// $('#franquiciasCredito').hide();


// funcion llenar datos e imprimir
function selecionarAlianza(e){
    e.preventDefault();

    let alianza = document.getElementById('alianza');
    let optionAlianza = alianza.value;
    let redProcesamiento = document.getElementById('redProcesamiento');
    let optionRed = redProcesamiento.value;

    // if (optionRed == 'Redeban' && optionRed == 'Credibanco') {
    //     $('#franquiciasCredito').show();
    // } else if (optionRed == 'PSE'){
    //     $('#franquiciasCredito').hide();
    // } else{
    //     // $('#franquiciasCredito').hide();
    // }
    
   
    const idComercio = document.querySelector("#idComercio").value;
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    const visa = document.getElementById('visa');
    const masterCard = document.getElementById('masterCard');
    const dinners = document.getElementById('dinners');
    const americanExpress = document.getElementById('americanExpress');
    const credencial = document.getElementById('credencial');

    var errorMsg = document.getElementById('error-message');

    var checkedArray = [];
    // console.log(visa);
    if(visa.checked){
        checkedArray.push('Visa ');
    }
    if(masterCard.checked){
        checkedArray.push('MasterCard ');
    }
    if(dinners.checked){
        checkedArray.push('Dinners Club ');
    }
    if(americanExpress.checked){
        checkedArray.push('American Express ');
    }
    if(credencial.checked){
        checkedArray.push('Credencial ');
    }
    else{
        errorMsg.innerText = '***Seleccionar solo en Redeban y Credibanco***'; 
    } 

    
        
    var correosJelpit = 'mlsalgado@davivienda.com; viancaro@proveedores.davivienda.com; pjcastib@proveedores.davivienda.com; liliana.rubio@serviciosbolivar.com; fabian.poveda@serviciosbolivar.com; mildred.cortes@serviciosbolivar.com; luis.ordonez.castro@serviciosbolivar.com; erika.cruz@serviciosbolivar.com;';
    var correosAdquirencia = 'fmontealegre@davivienda.com; ';
    var correosCopia = 'soporte.integraciones@epayco.com; certificaciones.comercial@payco.co; manuel.granada@epayco.com' ;
    var correosKickOff = 'soporte.integraciones@epayco.com; certificaciones.comercial@payco.co; ';
    
    switch (optionAlianza) {
        case "jelpit":
            switch (optionRed) {
                case "PSE":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correosJelpit}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosCopia}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Salida a producción PSE || Salida a producción PSE/Migración Jelpit`;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;
                    
                    document.getElementById('respuestaCRM').innerHTML = `Buen día. \n\nSe realiza la certificación en PSE con la respectiva prueba de pago en conexión con ACH y redirigiendo a la entidad bancaria.`;

                    document.getElementById('respuestaCertificaciones').innerHTML = `Buen Día. \n\nReciba un cordial saludo. \n\nTe confirmo la certificación del comercio ${nombre} en el medio de pago PSE por medio de ACH, quien ya se encuentra notificado y el paquete de transacciones de este comercio es el activo y relacionado con la Alianza Jelpit.`;

                    document.getElementById('respuesta').innerHTML = `Buen día. \n\nReciba de nuestra parte un cordial saludo. \n\nDe parte del equipo ePayco es un gusto informarles de que su proceso de certificación en nuestro modelo Gateway en la certificación PSE para el comercio ${nombre} ha culminado exitosamente con las respectivas pruebas de pago en la conexión con ACH. \n\nAdicionalmente, se confirma la creación de las llaves del comercio en el panel de Soluciones Bolívar con el medio de pago activo. \n\nNota: El correo para ingresar al Dashboard es el siguiente: ${correo} para validar la contraseña, por favor ingresar a la siguiente página  https://dashboard.epayco.co/login luego seleccionar la opción de olvido su contraseña para restablecer su contraseña.`;
                    
                    break;

                case "Redeban":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correosJelpit}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosCopia}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Salida a producción Tarjeta de Credito Redeban`;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;


                    document.getElementById('respuestaCRM').innerHTML = `Buen día. \n\nSe realiza la certificación en  Tarjeta de Credito por medio de ${optionRed} con las respectivas transacciones de prueba de las cuales no se tiene registro alguno debido a que no se tiene algún acceso a ${optionRed} para validar y dejar evidencia de estas. `;

                    document.getElementById('respuestaCertificaciones').innerHTML = `Buen Día. \n\nReciba un cordial saludo. \n\nTe confirmo la certificación del comercio ${nombre} en el medio de pago Tarjeta de Crédito por medio de ${optionRed}, quien ya se encuentra notificado y el paquete de transacciones de este comercio es el activo y relacionado con la Alianza Jelpit.`;
                    
                    document.getElementById('respuesta').innerHTML = `Buen día. \n\nReciba de nuestra parte un cordial saludo. \n\nDe parte del equipo ePayco es un gusto informarles de que su proceso de certificación en nuestro modelo Gateway en la certificación tarjeta de crédito para el comercio ${nombre} ha culminado exitosamente con la respectiva prueba de pago en la conexión con ${optionRed} en las franquicias solicitadas (${checkedArray}). \n\nAdicionalmente, se confirma la creación de las llaves del comercio en el panel de Soluciones Bolívar con el medio de pago activo. \n\nNota: El correo para ingresar al Dashboard es el siguiente: ${correo} para validar la contraseña, por favor ingresar a la siguiente página  https://dashboard.epayco.co/login luego seleccionar la opción de olvido su contraseña para restablecer su contraseña.`;
                    
                    break;

                case "Credibanco":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correosJelpit}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosCopia}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Salida a producción Tarjeta de Credito Credibanco`;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;


                    document.getElementById('respuestaCRM').innerHTML = `Buen día. \n\nSe realiza la certificación en  Tarjeta de Credito por medio de ${optionRed} con las respectivas transacciones de prueba de las cuales no se tiene registro alguno debido a que no se tiene algún acceso a ${optionRed} para validar y dejar evidencia de estas. `;

                    document.getElementById('respuestaCertificaciones').innerHTML = `Buen Día. \n\nReciba un cordial saludo. \n\nTe confirmo la certificación del comercio ${nombre} en el medio de pago Tarjeta de Crédito por medio de ${optionRed}, quien ya se encuentra notificado y el paquete de transacciones de este comercio es el activo y relacionado con la Alianza Jelpit.`;
                    
                    document.getElementById('respuesta').innerHTML = `Buen día. \n\nReciba de nuestra parte un cordial saludo. \n\nDe parte del equipo ePayco es un gusto informarles de que su proceso de certificación en nuestro modelo Gateway en la certificación tarjeta de crédito para el comercio ${nombre} ha culminado exitosamente con la respectiva prueba de pago en la conexión con ${optionRed} en las franquicias solicitadas (${checkedArray}). \n\nAdicionalmente, se confirma la creación de las llaves del comercio en el panel de Soluciones Bolívar con el medio de pago activo. \n\nNota: El correo para ingresar al Dashboard es el siguiente: ${correo} para validar la contraseña, por favor ingresar a la siguiente página  https://dashboard.epayco.co/login luego seleccionar la opción de olvido su contraseña para restablecer su contraseña.`;

                    break;
            
                default:
                    document.getElementById('respuestaRed').innerHTML = `Debes de seleccionar una red de procesamiento`;
                    break;
            }
          break;

        case "adquirencia":
            switch (optionRed) {
                case "PSE":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correosAdquirencia}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosCopia}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Salida a producción PSE | Adquirencia Móvil | ID ${idComercio} - ${nombre} `;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;

                    document.getElementById('respuestaCRM').innerHTML = `Buen día. \n\nSe realiza la certificación en PSE con la respectiva prueba de pago en conexión con ACH y redirigiendo a la entidad bancaria.`;

                    document.getElementById('respuestaCertificaciones').innerHTML = `Buen Día. \n\nReciba un cordial saludo. \n\nTe confirmo la certificación del comercio ${nombre} en el medio de pago PSE por medio de ACH, quien ya se encuentra notificado y bajo alianza Adquirencia Móvil.`;
                    
                    document.getElementById('respuesta').innerHTML = `Buen día. \n\nReciba de nuestra parte un cordial saludo. \n\nDe parte del equipo ePayco es un gusto informarles de que su proceso de certificación en nuestro modelo Gateway en la certificación de ${optionRed} para el comercio ${nombre} ha culminado exitosamente con las respectivas pruebas de pago. \n\nNota: El correo para ingresar al Dashboard de Adquirencia Móvil es el siguiente: ${correo}.`;
                    
                    break;

                case "Redeban":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correosAdquirencia}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosCopia}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Salida a producción Tarjeta de Credito | Adquirencia Móvil | ID ${idComercio} - ${nombre} `;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;

                    document.getElementById('respuestaCRM').innerHTML = `Buen día. \n\nSe realiza la certificación en TC por medio de ${optionRed} con las respectivas transacciones de prueba de las cuales no se tiene registro alguno debido a que no se tiene algún acceso a ${optionRed} para validar y dejar evidencia de estas.`;

                    document.getElementById('respuestaCertificaciones').innerHTML = `Buen día.  \n\nReciba un cordial saludo. \n\nTe notifico la certificación del comercio ${nombre} en el medio de pago tarjeta crédito por medio de ${optionRed} quien ya se encuentra notificado y bajo alianza Adquirencia Móvil.`;
                    
                    document.getElementById('respuesta').innerHTML = `Buen día. \n\nReciba de nuestra parte un cordial saludo. \n\nDe parte del equipo ePayco es un gusto informarles de que su proceso de certificación en nuestro modelo Gateway en la certificación de tarjeta de crédito con ${optionRed} en las franquicias solicitadas (${checkedArray}) para el comercio ${nombre} ha culminado exitosamente con las respectivas pruebas de pago. \n\nNota: El correo para ingresar al Dashboard de Adquirencia Móvil es el siguiente: ${correo}.`;
                    
                    break;
                    
                case "Credibanco":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correosAdquirencia}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosCopia}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Salida a producción PSE | Adquirencia Móvil | ID ${idComercio} - ${nombre} `;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;

                    document.getElementById('respuestaCRM').innerHTML = `Buen día. \n\nSe realiza la certificación en TC por medio de ${optionRed} con las respectivas transacciones de prueba de las cuales no se tiene registro alguno debido a que no se tiene algún acceso a ${optionRed} para validar y dejar evidencia de estas.`;

                    document.getElementById('respuestaCertificaciones').innerHTML = `Buen día.  \n\nReciba un cordial saludo. \n\nTe notifico la certificación del comercio ${nombre} en el medio de pago tarjeta crédito por medio de ${optionRed} quien ya se encuentra notificado y bajo alianza Adquirencia Móvil.`;
                    
                    document.getElementById('respuesta').innerHTML = `Buen día. \n\nReciba de nuestra parte un cordial saludo. \n\nDe parte del equipo ePayco es un gusto informarles de que su proceso de certificación en nuestro modelo Gateway en la certificación de tarjeta de crédito con ${optionRed} en las franquicias solicitadas (${checkedArray}) para el comercio ${nombre} ha culminado exitosamente con las respectivas pruebas de pago. \n\nNota: El correo para ingresar al Dashboard de Adquirencia Móvil es el siguiente: ${correo}.`;
                    break;
            
                default:
                    document.getElementById('respuestaRed').innerHTML = `Debes de seleccionar una red de procesamiento`;
                    break;
            }
          break;

        case "alianzaDavivenda":
            switch (optionRed) {
                case "PSE":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correosAdquirencia}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosCopia}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Salida a producción PSE | Adquirencia Móvil | ID ${idComercio} - ${nombre} `;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;

                    
                    document.getElementById('respuesta').innerHTML = `En proceso de construcción (...)`;
                    
                    break;

                case "Redeban":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correosAdquirencia}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosCopia}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Salida a producción PSE | Adquirencia Móvil | ID ${idComercio} - ${nombre} `;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;
                    
                    document.getElementById('respuesta').innerHTML = `En proceso de construcción (...)`;
                    
                    break;
                    
                case "Credibanco":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correosAdquirencia}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosCopia}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Salida a producción PSE | Adquirencia Móvil | ID ${idComercio} - ${nombre} `;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;
                    
                    document.getElementById('respuesta').innerHTML = `En proceso de construcción (...)`;
                    break;
            
                default:
                    document.getElementById('respuestaRed').innerHTML = `Debes de seleccionar una red de procesamiento`;
                    break;
            }
          break;

        case "normal":
            switch (optionRed) {
                case "PSE":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correo}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosKickOff}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Kick-off Validación medios de pago ${optionRed}`;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;

                    document.getElementById('respuestaCRM').innerHTML = `Buen día. \n\nSe realiza la certificación en PSE con la respectiva prueba de pago en conexión con ACH y redirigiendo a la entidad bancaria.`;

                    document.getElementById('respuestaCertificaciones').innerHTML = `Buen día. \n\nReciba un cordial saludo. \n\nTe notifico la certificación del comercio ${nombre} en el medio de pago ${optionRed} quien ya se encuentra notificado y con el paquete de TX activo. \n\nQuedo atento a cualquier novedad.`;
                    
                    document.getElementById('respuesta').innerHTML = `Buen día. \n\nReciba un cordial saludo.\n\nDe parte del equipo ePayco es un gusto informarles de que su proceso de certificación en nuestro modelo Gateway en la certificación PSE para el comercio ${nombre} ha culminado exitosamente con la respectiva prueba de pago en la conexión con ${optionRed}, solicitamos amablemente realizar una reunión entre su desarrollador y nuestro equipo de soporte para revisar la integración de nuestra pasarela en su comercio y así garantizar su correcto funcionamiento, por favor agendar reunión (teniendo en cuenta que el horario es en hora militar) en el siguiente enlace "https://calendly.com/epayco/reunion" y confirmarnos la fecha por este medio. \n\nSe recomienda al momento de la reunión poder disponer de tarjetas reales para realizar pruebas en la integración implementada para la validación de la certificación en lo posible con cada una de las franquicias certificadas, esto con el fin de dar cumplimiento al acta de salida a producción durante el Kick-Off la cual se envía adjunta para su previa revisión y una vez diligenciada se debe de entregar firmada de manera digital en el tiempo de la reunión. \n\nEs importante pueda realizar el agendamiento de la reunión en el menor tiempo posible, ya que hasta no hacer efectiva dicha reunión el medio de pago notificado en esta certificación se encuentran inactivo.`;
                    
                    break;

                case "Redeban":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correo}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosKickOff}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Kick-off Validación medios de pago ${optionRed}`;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;

                    document.getElementById('respuestaCRM').innerHTML = `Buen día. \n\nSe realiza la certificación en TC por medio de ${optionRed} con las respectivas transacciones de prueba de las cuales no se tiene registro alguno debido a que no se tiene algún acceso a ${optionRed} para validar y dejar evidencia de estas.`;

                    document.getElementById('respuestaCertificaciones').innerHTML = `Buen día. \n\nReciba un cordial saludo. \n\nTe notifico la certificación del comercio ${nombre} en el medio de pago tarjeta crédito por medio de ${optionRed} quien ya se encuentra notificado y con el paquete de TX activo. \n\nQuedo atento a cualquier novedad.`;
                    
                    
                    document.getElementById('respuesta').innerHTML = `Buen día. \n\nReciba un cordial saludo. \n\nDe parte del equipo ePayco es un gusto informarles de que su proceso de certificación en nuestro modelo Gateway en la certificación TC para el comercio ${nombre} ha culminado exitosamente con las respectivas pruebas de pago en la conexión con ${optionRed} en las franquicias solicitadas (${checkedArray}), amablemente solicitamos realizar una reunión entre su desarrollador y nuestro equipo de soporte para revisar la integración de nuestra pasarela en su comercio y así garantizar su correcto funcionamiento, por favor agendar reunión en el siguiente enlace "https://calendly.com/epayco/reunion" y confirmarnos la fecha por este medio. \n\nSe recomienda al momento de la reunión poder disponer de tarjetas reales para realizar pruebas en la integración implementada para la validación de la certificación en lo posible con cada una de las franquicias certificadas, esto con el fin de dar cumplimiento al acta de salida a producción durante el kick-off la cual se envía adjunta para su previa revisión y una vez diligenciada se debe de entregar firmada de manera digital en el tiempo de la reunión. \n\nTener en cuenta que las franquicias antes mencionadas en la activación de esta certificación no quiere decir que serán las únicas disponibles para su comercio, ya que estas son las que se encuentran habilitadas y activas al momento de ${optionRed} notificar la disponibilidad para certificar, pero paulatinamente se pueden activar las demás en caso de haber sido solicitadas una vez la entidad bancaria correspondiente las notifique. \n\nEs importante que pueda realizar el agendamiento de la reunión en el menor tiempo posible, ya que hasta no hacer efectiva dicha reunión los medios de pago notificados en esta certificación se encuentran inactivos. `;
                    
                    break;
                    
                case "Credibanco":
                    document.getElementById('respuestaRed').innerHTML = `${optionRed}`;
                    document.getElementById('correosNotificacion').innerHTML = `${correo}`;
                    document.getElementById('correosNotificacionCopia').innerHTML = `${correosKickOff}`;
                    document.getElementById('respuestaAsunto').innerHTML = `Kick-off Validación medios de pago ${optionRed}`;
                    document.getElementById('typeKickoff').innerHTML = `Certificación ${optionRed}`;


                    document.getElementById('respuestaCRM').innerHTML = `Buen día. \n\nSe realiza la certificación en TC por medio de ${optionRed} con las respectivas transacciones de prueba de las cuales no se tiene registro alguno debido a que no se tiene algún acceso a ${optionRed} para validar y dejar evidencia de estas.`;

                    document.getElementById('respuestaCertificaciones').innerHTML = `Buen día. \n\nReciba un cordial saludo. \n\nTe notifico la certificación del comercio ${nombre} en el medio de pago tarjeta crédito por medio de ${optionRed} quien ya se encuentra notificado y con el paquete de TX activo. \n\nQuedo atento a cualquier novedad.`;
                    
                    document.getElementById('respuesta').innerHTML = `Buen día. \n\nReciba un cordial saludo.\n\nDe parte del equipo ePayco es un gusto informarles de que su proceso de certificación en nuestro modelo Gateway en la certificación TC para el comercio ${nombre} ha culminado exitosamente con las respectivas pruebas de pago en la conexión con ${optionRed} en las franquicias solicitadas (${checkedArray}), amablemente solicitamos realizar una reunión entre su desarrollador y nuestro equipo de soporte para revisar la integración de nuestra pasarela en su comercio y así garantizar su correcto funcionamiento, por favor agendar reunión en el siguiente enlace "https://calendly.com/epayco/reunion" y confirmarnos la fecha por este medio. \n\nSe recomienda al momento de la reunión poder disponer de tarjetas reales para realizar pruebas en la integración implementada para la validación de la certificación en lo posible con cada una de las franquicias certificadas, esto con el fin de dar cumplimiento al acta de salida a producción durante el kick-off la cual se envía adjunta para su previa revisión y una vez diligenciada se debe de entregar firmada de manera digital en el tiempo de la reunión. \n\nTener en cuenta que las franquicias antes mencionadas en la activación de esta certificación no quiere decir que serán las únicas disponibles para su comercio, ya que estas son las que se encuentran habilitadas y activas al momento de ${optionRed} notificar la disponibilidad para certificar, pero paulatinamente se pueden activar las demás en caso de haber sido solicitadas una vez la entidad bancaria correspondiente las notifique. \n\nEs importante que pueda realizar el agendamiento de la reunión en el menor tiempo posible, ya que hasta no hacer efectiva dicha reunión los medios de pago notificados en esta certificación se encuentran inactivos. `;
                    break;
            
                default:
                    document.getElementById('respuestaRed').innerHTML = `***Debes de seleccionar una red de procesamiento***`;
                    break;
            }
          break;

        default:
            document.getElementById('respuestaRed').innerHTML = `***Debes de seleccionar una red de procesamiento`;
            document.getElementById('correosNotificacion').innerHTML = `***Debes de seleccionar una alianza`;
            document.getElementById('correosNotificacionCopia').innerHTML = `***Debes de seleccionar una alianza`;
            document.getElementById('respuestaAsunto').innerHTML = `***Debes de seleccionar una alianza`;
          break;
      }
};

