<?php require 'views/admin/partials/header.view.php' ?>
<div class="edit-card">
	<div class="d-flex justify-content-center">
		<div class="brand_logo_container">
			<img src="/public/images/rooklogo.jpeg" class="brand_logo" alt="Logo">
		</div>
	</div>
    <div class="login-overlay">
        <div class="center-box login-form">
            <div class="mb-3">
                <div><h3>edit</h3>
                </div>
            </div>

            <form method="<?= $method ?>" action="<?= $action ?>">
                <div class="container mt-5">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input id="edit1" type="text" name="first_name" placeholder="Voornaam" value="<?= isset($user) ? $user->first_name : '' ?>">
                        </div>

                        <div class="col-md-6">
                            <input id="edit1" type="text" name="last_name" placeholder="Achternaam" value="<?= isset($user) ? $user->last_name : '' ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input id="edit1" type="email" name="email" placeholder="E-mail" value="<?= isset($user) ? $user->email : '' ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input id="edit1" type="text" name="city" placeholder="Woonplaats" value="<?= isset($user) ? $user->city : '' ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <select id="edit1" name="role">
                                <option value="0">Kies een rol...</option>
                                    <?php foreach($roles as $role) : ?>
                                <option value="<?= $role->id ?>"><?= $role->friendly_name ?></option>
                                    <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>Geboortedatum</label><br/>
                            <input id="edit1" type="date" name="birthday" value="<?= $user->birthday ?>">
                        </div>
                    </div>

                    <input type="hidden" name="f_token" value="<?= createToken() ?>">
                    <input id="submit" class="safe" type="submit" value="Opslaan">
                </div>
            </form>
        </div>
    </div>
</div>
