const urlAll = "https://economia.awesomeapi.com.br/json/all/";

$(document).ready(function() {
    fetch(urlAll).then(response => {
        return response.json();
      }).then(currencyJson => {
       var data = currencyJson;
        document.getElementById("currencyInput2").value = data.USD.bid;
      });  
});

var currency1 = $('#currency1 option:selected').val();
var currency2 = $('#currency2 option:selected').val();

$("#currency1").change(function () {
    currency1 = $('#currency1 option:selected').val();
    convert('currencyInput1', 'currencyInput2');
});

$("#currency2").change(function () {
    currency2 = $('#currency2 option:selected').val();
    convert('currencyInput2', 'currencyInput1');
});

async function convert(targetCurrency, changedCurrency) {
    let input = document.getElementById(changedCurrency);
    input.value = input.value.replace(/[a-zA-Z]/g, '').replace(',', '.');

    const response = await fetch(urlAll);
    const data = await response.json();

    let bidChanged, bidTarget;

    let selectChanged = document.getElementById(changedCurrency.replace("Input", "")).value;
    let selectTarget = document.getElementById(targetCurrency.replace("Input", "")).value;

    switch (selectChanged) {
        case 'BRL':
            bidChanged = 1;
            break;
        case 'USD':
            bidChanged = data.USD.bid;
            break;
        case 'EUR':
            bidChanged = data.EUR.bid;
            break;
        case 'CNY':
            bidChanged = data.CNY.bid;
            break;
        case 'BTC':
            bidChanged = data.BTC.bid;
            break;
        default:
            break;
    }

    switch (selectTarget) {
        case 'BRL':
            bidTarget = 1;
            break;
        case 'USD':
            bidTarget = data.USD.bid;
            break;
        case 'EUR':
            bidTarget = data.EUR.bid;
            break;
        case 'CNY':
            bidTarget = data.CNY.bid;
            break;
        case 'BTC':
            bidTarget = data.BTC.bid;
            break;
        default:
            break;
    }

    document.getElementById(targetCurrency).value = (document.getElementById(changedCurrency).value *  bidChanged / bidTarget);
};

