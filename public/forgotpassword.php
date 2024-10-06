<?php include 'partials/header.php'; ?>

<div class="form">
    <div>
        <a href="index.php" class="close-btn">X</a>
        <h3 class="form-title">Mot de passe oublié</h3>
        <form action="#" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
            </div>
            <button type="submit" class="btn-primary reservation">Réinitialiser</button>
        </form>
        <div class="form-link">
            <a href="formsubscription.php">Pas de compte ? Inscris-toi</a>
            <a href="formlogin.php">Déjà un compte ? Connecte-toi</a></p>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>