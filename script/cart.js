    //total price account start
        document.addEventListener('DOMContentLoaded', function() {
            let totalPrice = 0;
            const prices = document.querySelectorAll('.product-price');

            prices.forEach(priceElement => {
                const price = parseFloat(priceElement.getAttribute('data-price'));
                totalPrice += price;
            });

            document.getElementById('total-price').textContent = 'Total: ' + totalPrice.toFixed(2) + ' $';
            document.getElementById('total-items').textContent = ' Items in the cart: ' + prices.length;
        });
        document.addEventListener("DOMContentLoaded", function() {
            const updateCartSummary = () => {
                let totalItems = 0;
                let totalPrice = 0;

                document.querySelectorAll('.quantity-input').forEach(input => {
                    const quantity = parseInt(input.value);
                    const price = parseFloat(input.getAttribute('data-price'));

                    totalItems += quantity;
                    totalPrice += quantity * price;
                });

                document.getElementById('total-items').textContent = ' Items in the cart: ' + totalItems;
                document.getElementById('total-price').textContent = 'Total: ' + totalPrice.toFixed(2) + ' $';
            };

            document.querySelectorAll('.count-add').forEach(button => {
                button.addEventListener('click', (e) => {
                    const input = e.target.previousElementSibling;
                    if (parseInt(input.value) < parseInt(input.getAttribute('max'))) {
                        input.value = parseInt(input.value) + 1;
                        updateCartSummary();
                    }
                });
            });

            document.querySelectorAll('.count-mins').forEach(button => {
                button.addEventListener('click', (e) => {
                    const input = e.target.nextElementSibling;
                    if (parseInt(input.value) > parseInt(input.getAttribute('min'))) {
                        input.value = parseInt(input.value) - 1;
                        updateCartSummary();
                    }
                });
            });

            document.querySelectorAll('.quantity-input').forEach(input => {
                input.addEventListener('input', updateCartSummary);
            });

            updateCartSummary();
        });
    //total price account end
