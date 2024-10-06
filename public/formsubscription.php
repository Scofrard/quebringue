<?php include 'partials/header.php'; ?>

<div class="form">
    <div>
        <a href="index.php" class="close-btn">X</a>
        <h3 class="form-title">Inscription</h3>
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
                    <label for="email">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                </div>
            </div>
            <button type="submit" class="btn-primary reservation">S'INSCRIRE</button>
        </form>
        <div class="form-link">
            <a href="formlogin.php">Déjà un compte ? Connecte-toi</a>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>