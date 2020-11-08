var url = "https://economia.awesomeapi.com.br/json/all"
var currency1 = $('#currency1 option:selected').val();
var currency2 = $('#currency2 option:selected').val();

$("#currency1").change(function () {
    currency1 = $('#currency1 option:selected').val();
});

$("#currency2").change(function () {
    currency2 = $('#currency2 option:selected').val();
});

const currencyInfo =
    fetch(url)
        .then(function (response) {
            return response.json()
        })

console.log(currencyInfo);



function convert(targetCurrency, changedCurrency) {
    let input = document.getElementById(changedCurrency);
    input.value = input.value.replace(/[a-zA-Z]/g, '').replace(',', '.');

    document.getElementById(targetCurrency).value = (document.getElementById(changedCurrency).value * 2);
}





