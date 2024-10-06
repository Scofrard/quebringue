</body>

<script>
    document.querySelector('.next').addEventListener('click', function(e) {
        e.preventDefault();
        const container = document.querySelector('.cards');
        const scrollAmount = container.querySelector('.card').offsetWidth + 50;
        container.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });

    document.querySelector('.prev').addEventListener('click', function(e) {
        e.preventDefault();
        const container = document.querySelector('.cards');
        const scrollAmount = container.querySelector('.card').offsetWidth + 50;
        container.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.cardcomment');
        const dots = document.querySelectorAll('.pagination-dots .dot');

        // Créer un observateur pour détecter quand un élément entre dans le viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Trouver l'index de la carte visible
                    const index = Array.from(cards).indexOf(entry.target);

                    // Mettre à jour les dots
                    dots.forEach((dot, dotIndex) => {
                        dot.classList.toggle('active', dotIndex === index);
                    });
                }
            });
        }, {
            threshold: 0.5
        }); // On considère l'élément visible lorsqu'il est au moins à 50% visible

        // Observer chaque carte
        cards.forEach(card => {
            observer.observe(card);
        });
    });
</script>

</html>