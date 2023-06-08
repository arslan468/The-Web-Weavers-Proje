window.addEventListener('DOMContentLoaded', function () {
    var buttons = document.querySelectorAll('.btn');
    var totalValue = 100;

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', function (event) {
            event.preventDefault();

            var card = this.closest('.card');
            var input = card.querySelector('input');
            var progressBar = card.querySelector('.progress-bar');
            var progressValue = card.querySelector('.progress-value');


            var percentage = 0;
            var value = parseFloat(input.value); // parseFloat ile değeri ondalıklı sayıya çeviriyoruz
            if (!isNaN(value)) { // NaN kontrolü yaparak geçerli bir sayı olduğunu doğruluyoruz
                // totalValue += value;


                percentage += (value / totalValue) * 100

                progressBar.style.width = percentage + '%';
                progressValue.textContent = percentage.toFixed(2) + '%';
            }

            input.value = ''; // Butona tıklandıktan sonra inputu sıfırla
        });
    }
});
