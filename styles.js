$(document).ready(() => {
    $('#height').mask('0.00');

    $('#form').submit(function (event) {
        let weight = $('#weight').val();
        let height = $('#height').val();
        handleClickButton(weight, height);
        event.preventDefault();
    });
});

const handleClickButton = (weight, height) => {

    let res = $('#res');
    let calc = calcIMC(height, weight).toFixed(1);
    res.css("display", "block");
    res.text('Seu IMC é: ');
    res.append(calc);

}

const calcIMC = (height, weight) => {
    return weight / (height * height);
}