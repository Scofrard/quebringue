<?php include 'partials/header.php'; ?>

<div class="form">
    <div>
        <a href="index.php" class="close-btn">X</a>
        <h3 class="form-title">Réserve ichi ta bringue</h3>
        <form action="#" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" autofocus required>
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Nom" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="bringue">Qué bringue ?</label>
                    <input type="text" id="bringue" name="bringue" placeholder="Bringue" required>
                </div>
                <div class="places-group">
                    <label for="places">Places :</label>
                    <div class="places-control">
                        <button type="button" class="places-btn" id="decrease">-</button>
                        <input type="number" id="places" name="places" value="1" min="1">
                        <button type="button" class="places-btn" id="increase">+</button>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-primary reservation">RÉSERVER</button>
        </form>
    </div>
</div>

<?php include 'partials/footer.php'; ?>