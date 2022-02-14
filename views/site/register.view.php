<?php require 'views/partials/header.view.php' ?>

<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="register_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="/public/images/rooklogo.jpeg" class="brand_logo" alt="Logo">
				</div>
			</div>

            <div class="alert alert-danger" id="register-message" role="alert"></div>

            <form method="<?= $method ?>" onsubmit="return false;" name="frmRegister" class="row g-3">
                <div class="col-md-6">
                    <label for="first_name" class="form-label">Voornaam</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" maxlength="80" required>
                 </div>
                <div class="col-md-6 mb-3">
                    <label for="last_name" class="form-label">Achternaam</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" maxlength="80" required>
                </div>
                    
                <div class="col-md-12 mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" maxlength="255" required>
                </div>

                <div class="col-md-6">
                    <label for="password">Wachtwoord</label>
                    <input type="password" class="form-control" name="password" id="password" maxlength="50" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="password_2">Herhaal u wachtwoord</label>
                    <input type="password" class="form-control" name="password_2" id="password_2" maxlength="50" required>
                 </div>

                <input type="hidden" name="f_token" value="<?= createToken() ?>">

                <div class="col-md-12 mb-5">
                    <input type="submit" class="btn btn-dark" value="Opslaan">
                    <input type="button" class="btn btn-dark" id="register-cancel" value="annuleren">
                </div>
            </form>
        </div>
    </div>
</div>



<script src="public/js/partials/register.js"></script>

<?php require 'views/partials/footer.view.php' ?>