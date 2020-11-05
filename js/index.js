//#region Cotação do Dólar
    var url_cotacao = "https://economia.awesomeapi.com.br/all/USD-BRL";
    var dolarHoje;
    let request = new XMLHttpRequest();
    request.open('GET', url_cotacao);
    request.send();

    request.onload = function(){
        dolarHoje = JSON.parse(request.responseText).USD.bid;
        let cotacao = document.querySelector('#cotacao');
        cotacao.innerHTML = dolarHoje;
        document.getElementById("real").value = dolarHoje;       
    };
//#endregion

    function dolarReal()
    {
        var input = document.getElementById("dolar");
        input.value = input.value.replace(/[a-zA-Z]/g,'');

        document.getElementById("real").value = (document.getElementById("dolar").value * dolarHoje).toFixed(2);    
    }

    function realDolar() 
    {
        var input = document.getElementById("real");
        input.value = input.value.replace(/[a-zA-Z]/g,'');

        document.getElementById("dolar").value = (document.getElementById("real").value / dolarHoje).toFixed(2);     
    }