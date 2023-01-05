document.getElementById("paymentEpayco").onclick = checkoutEpayco;

function checkoutEpayco(e){
    e.preventDefault();
    

    let currency = document.getElementById('currency');
    let optionCurrency = currency.value;

    let typeCheckout = document.getElementById('typeCheckout');
    let optionCheckout = typeCheckout.value;

    let typeMethod = document.getElementById('typeMethod');
    let optionMethod = typeMethod.value;

    let typelang = document.getElementById('typelang');
    let optionLang = typelang.value;

    var publicKey = document.getElementById("publicKey").value;
    var description = document.getElementById("description").value;
    var amount = document.getElementById("amount").value;
    var tax = document.getElementById("tax").value;
    var tax_base = document.getElementById("tax_base").value;
    var urlConfirmacion = document.getElementById("urlConfirmacion").value;
    var urlRespuesta = document.getElementById("urlRespuesta").value;
    
    var date = new Date();
    year = date.getFullYear();
    day = date.getDay();
    hour = date.getHours();
    minutes = date.getMinutes();
    seconds = date.getSeconds();
    
    var handler = ePayco.checkout.configure({
        key: publicKey, 
        test: false,

    });
    
    var data = {
        name: description,
        description: description,
        invoice: "Factura # D" + day + "-H" + hour + "-M" + minutes + "-S" + seconds,
        currency: optionCurrency,
        amount: amount,
        tax_base: tax_base, 
        tax: tax, 
        country: "co",
        lang: optionLang,
        external: optionCheckout,

        confirmation: urlConfirmacion,
        response: urlRespuesta,
        method: optionMethod,

        //Atributos opcionales
        extra1: description,
        extra2: "extra2",
        extra3: "extra3",
    };

    // console.log(data);
    handler.open(data);
    console.log("🚀 ~ file: payment.js ~ line 35 ~ checkoutEpayco ~ public_key:", publicKey)
    console.log("🚀 ~ file: payment.js ~ line 40 ~ checkoutEpayco ~ data:", data)
}