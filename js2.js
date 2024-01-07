document.addEventListener('DOMContentLoaded', function() {
function sendMoney2() {
    var budget1 = parseInt(document.querySelector('#budget1').textContent);
    var budget2 = parseInt(document.querySelector('#budget2').textContent);

    if (budget2 >= 5) {
        budget2 -= 5;
        budget1 += 5;
    } else {
        alert("Insufficient budget on Second Website.");
    }

    document.querySelector('#budget1').textContent = budget1;
    document.querySelector('#budget2').textContent = budget2;
}
function sendMoney() {
   
}
});