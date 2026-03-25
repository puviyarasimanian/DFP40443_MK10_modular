document.addEventListener('DOMContentLoaded', function () {

    const quantityInputs = document.querySelectorAll('.qty-input');
    const totalPriceEl = document.getElementById('total-price');

    function calculateTotal() {
        let total = 0;

        quantityInputs.forEach(input => {
            let quantity = parseInt(input.value) || 0;
            let price = parseFloat(input.dataset.price) || 0;
            total += quantity * price;
        });

        if (totalPriceEl) {
            totalPriceEl.textContent = "RM " + total.toFixed(2);
        }
    }

    quantityInputs.forEach(input => {
        input.addEventListener('input', calculateTotal);
    });

});