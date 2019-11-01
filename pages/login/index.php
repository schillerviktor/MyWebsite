<?php
FrontController::show("layouts/header");
if (FrontController::is_logged_in()) {
    header("Location: /");
}
?>
<section>
    <h4>Bejelentkezés</h4>
    <article class="registration-form-wrapper">
        <div class="registration-form">
            <form action="/?page=login&action=login" method="POST" autocomplete="off">
                <div class="input-field">
                    <input id = "username" name="username" required
                           type = "text" />
                    <label for = "comments">Felhasználónév</label>
                </div>
                <div class="input-field">
                    <input id = "password" name="password" required type = "password" />
                    <label for = "comments">Jelszó</label>
                </div>
                <button type="submit" class="btn">Küldés</button>
                <a href="/?page=registration" class="btn red right">Regisztráció</a>
            </form>
        </div>
    </article>
</section>

<?php FrontController::show("layouts/footer") ?>
