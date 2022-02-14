Vue.component('cigars', {
    data: function () {
        return {
            cigars: [],
        }
    },

    props: {
        
    },

    methods: {
        addToCart(product) {
            product.stock--;

            this.$root.$emit('add-to-cart', product);
        },
    },

    created() {
        let self = this;

        // Get all cigars calling function in controller (Ajax call)
        axios({
            method: 'GET',
            url: 'cigar',
            headers: {
                "X-Requested-With": "XMLHttpRequest"
            }
        }).then(function(response) {
            self.cigars = response.data.cigars;
        }).catch(function(response) {

        })
    },

    template: `
        <div class="row">
            <div class="col-md-4 pt-3" v-for="cigar in cigars">
                <div class="card">
                    <img :src="'/public/images/webshop/' + cigar.image" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ cigar.name }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>Stock: {{ cigar.stock }}</p>
                        <input type="button" class="btn btn-primary" :disabled="product.stock === 0" @click="addToCart(product)" value="Order">
                    </div>
                </div>
            </div>
        </div>`,
})