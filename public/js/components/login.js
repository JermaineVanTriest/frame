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