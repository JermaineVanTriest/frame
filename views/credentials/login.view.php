<?php require 'views/partials/header.view.php' ?>

<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="/public/images/rooklogo.jpeg" class="brand_logo" alt="Logo">
				</div>
			</div>

            <div class="login-overlay">
                <div class="center-box login-form">
                    <div class="mb-3">
                        <div><h3>Login</h3></div>
                    </div>

                    <form method="POST" name="frmLogin" onsubmit="return false;">
                        <?= generateFormTokenHTML() ?>
                        <div class="input-group mb-2">
					        <div class="input-group-append">
						        <span class="input-group-text"><i class="bi bi-person-circle"></i></i></span>
                            </div>
                                <label for="email" class="form-label"></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required />
                            </div>

                            <div class="input-group mb-2">
						        <div class="input-group-append">
							        <span class="input-group-text"><i class="bi bi-lock"></i></i></span>
						        </div>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Wachtwoord" required />
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-dark" value="Login" />
                                     </div>
                                    <div class="col-md-6">
                                        <div id="login-message"></div>
                                        <p id="NoAcount"> <a href="/register">Heb je nog geen acount klik dan hier om te registreren</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="public/js/partials/login.js"></script>

<?php require 'views/partials/footer.view.php' ?>