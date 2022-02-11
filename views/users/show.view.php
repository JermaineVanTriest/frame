<?php require 'views/admin/partials/header.view.php' ?>

<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
	    <div class="Show-card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="/public/images/rooklogo.jpeg" class="brand_logo" alt="Logo">
				</div>
			</div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 id="show"><?= $user->first_name . ' ' . $user->last_name ?></h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">E-mail</div>
                    <div class="col-md-9"><?= $user->email ?></div>
                </div>

                <div class="row">
                    <div class="col-md-2">Geboortedatum</div>
                    <div class="col-md-9"><?= date('d-m-Y', strtotime($user->birthday)) ?></div>
                </div>

                <a href="/user/<?= $user->id ?>/edit">
                    <button id="btn-show" class="btn btn-primary">Aanpassen</button>
                </a>
                <a href="/user/<?= $user->id ?>/destroy">
                    <button id="danger"  class="btn btn-primary">Verwijderen</button>
                </a>
            </div>
        </div>
    </div>
</div>