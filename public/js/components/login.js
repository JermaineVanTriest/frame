Vue.component('login-modal', {
    data() {
        return {
            Email: "",
            password: "",
            loginError: "",
            login_client: "",
            
        }
    },
    mounted() {
        this.getElementsById();
    },
    template:`
        
        <div class="login-overlay">
        <div class="center-box login-form">
            <div class="mb-3">
                <div><h3><?= $_ENV['APP_NAME'] ?></h3></div>
            </div>
    
            <form method="POST" name="frmLogin" onsubmit="return false;">
                <?= generateFormTokenHTML() ?>
                <div class="mb-3">
                    <label for="email" class="form-label">Your email address</label>
                    <input type="email" class="form-control" name="email" id="email" value="toby@codegorilla.nl" required />
                </div>
    
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required />
                </div>
    
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-dark" value="Login" />
                        </div>
                        <div class="col-md-6">
                            <div id="login-message"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
      </form>
    </section>
    </div>


    
    <div id="login_client" class="col-6">
    <div class="row" class="col-6 col-md-4">
    <h2 id="login_client">Nieuwe klant</h2>
    <p>
        Redenen om een account aan te maken:
    </p>
                <div class="clearfix">
                <div id="login_client">                    
                    
                            <p id="login_client"> <strong>&#10004; Beheer al je bestellingen en retouren op één plek </strong></p>
                            <p><strong>&#10004; Bestel sneller met je bewaarde adresgegevens</strong></p>
                            <p><strong>&#10004; Je winkelwagen altijd en overal opgeslagen </strong></p>
                            <p><strong>&#10004; Sigaren over de hele wereld</strong></p>
                            <p><strong>&#10004; Bereikbaar voor advies</strong></p>
                    </p>
                    <a class="btn btn-primary" href="/?page=newuser" role="button">Account aanmaken</a>
                </div>  
            </div>
        </div>
        
    </center>
</div>



    


         </div>
  </div>
</div>




<script>
    $(document).ready(function() {
        $('form').on('submit', function() {
            axios({
                url: '?page=login&function=login',
                method: 'POST',
                data: $(this).serialize(),
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(function(response) {
                console.log(response);
            })

        });
    });
</script>
`,
    methods: {
        getElementsById: function () {
            this.password = document.getElementById("login-password");
            this.email = document.getElementById("login-email")
            this.welcom = document.getElementById("login_client")
        },
        validateSubmit: function () {
            let self = this;
            let form = document.getElementById("login-form")
            form.classList.add('was-validated')
            if (form.checkValidity()) {
                axios({
                    method: 'POST',
                    url: `?page=login&action=verifyLogin`,
                    data: {
                        email: this.email.value,
                        password: this.password.value,
                    },
                    headers: {
                        "X-Requested-With": "XMLHttpRequest"
                    }
                }).then(function (response) {
                    if (response.data.success) {
                        console.log("true")
                        document.cookie = "loggedIn=true";
                        window.location.href = "/";
                    } else {
                        self.email.value = "";
                        self.password.value = "";
                        form.classList.remove('was-validated');
                        self.loginError = "Incorrect email or password. Please try again"
                    }
                }).catch(function (error) {
                    console.log("error:", error)
                });

            }
        }
    }
});