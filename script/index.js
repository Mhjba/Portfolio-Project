
// product rating start
document.addEventListener('DOMContentLoaded', () => {
    const productRatings = document.querySelectorAll('.stars');

    productRatings.forEach(stars => {
        const starElements = stars.querySelectorAll('.star');
        starElements.forEach(star => {
            star.addEventListener('click', () => {
                const productId = stars.getAttribute('data-product-id');
                const rating = star.getAttribute('data-value');

                starElements.forEach(s => {
                    s.classList.remove('selected');
                });

                for (let i = 0; i < rating; i++) {
                    starElements[i].classList.add('selected');
                }

                fetch('/rate', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ product_id: productId, rating: rating })
                })

            });
        });
    });
});
// product rating end

