Vue.component('shopping-cart', {
    data: function () {
        return {
            cart: window.localStorage.getItem('cart') !== null ? JSON.parse(window.localStorage.getItem('cart')) : {},
        }
    },

    props: {
        
    },

    methods: {
        closeCart() {
            $('.layer').fadeOut(); 
            $('.cart').fadeOut();
        },

        showCart() {
            $('.layer').fadeIn();
            $('.cart').toggle({
                direction: 'right',
            });
        },
        
        itemMinus: function (i) {
            let self = this;
            if (this.items[i].amount > 0) {
                this.items[i].amount--;
                axios({
                    method: 'POST',
                    url: `window.localStorage.getItem`,
                    data: {
                        id: self.items[i].product_id,
                        amt: -1
                    },
                    headers: {
                        "X-Requested-With": "XMLHttpRequest"
                    }
                }).then(function (response) {

                }).catch(function (error) {
                    console.log(error)
                });
            }
        },
        itemPlus: function (i) {
            let self = this;
            if (this.items[i].amount < this.items[i].stock) {
                this.items[i].amount++;
                axios({
                    method: 'POST',
                    url: `window.localStorage.getItem`,
                    data: {
                        id: self.items[i].product_id,
                        amt: 1
                    },
                    headers: {
                        "X-Requested-With": "XMLHttpRequest"
                    }
                }).then(function (response) {

                }).catch(function (error) {
                    console.log(error)
                });
            }
        }, formattedPrice: function (price) {
            return new
                Intl.NumberFormat(undefined, { style: 'currency', currency: 'EUR' }).format(price);
        }
    },

    template: `
    <div>
           
    <a @click="showCart" class="btn bi bi-basket"></a>
   
    <div class="cart fs-4">
        
        <button id="CloseCart" class="bi bi-x" @click.prevent="closeCart"></button>
    
        <div id="cart-title" class="row mt-3 mb-3 fw-bold">
            <div class="col-md-2"></div>                   
            <div class="col-md-3">Naam</div>
            <div class="col-md-3">Aantal</div>
            <div class="col-md-2">Prijs</div>
            <div class="col-md-2">Totaal Prijs</div>
        </div>

        <div id="cart-items" class="row mb-3" v-for="item in cart.items"><hr />
            <div class="img" class="col-md-2 "><img class='border_image_cart' :src="'/public/images/webshop/' + item.image" width="100%"></div>                   
            <div class="col-md-3">{{ item.name }}</div>
            <button class="cart__button" @click="itemMinus(i)">-</button>
            <div id="amount" class="col-md-3">{{ item.amount }}</div>
            <button class="cart__button" @click="itemPlus(i)">+</button>
            <div class="col-md-2"> € {{ item.price }}</div>
            <div class="col-md-2"> € {{ item.totalPrice }}</div>
            
            
        </div>

        <div class="row mt-3"><hr />
            <div class="col-md-2"></div>
            <div class="col-md-3 fw-bold">Total</div>
            <div class="col-md-2">{{ cart.totalItems }}</div>
            <div class="col-md-2"></div>
            <div class="col-md-3"> € {{ cart.totalPrice }}</div>
        </div>

        <div  class="row cart-footer justify-content-center">
            <a href="/home" id="cart-btn" class="col-md-5 btn btn_verder_winkelen mt-3 fs-3"><i class="fs-3 fa fa-arrow-left"></i>Verder winkelen</a>
            <a href="/checkout" id="cart-btn" class="col-md-3 btn mt-3 fs-3">Afrekenen</a>
        </div>
    </div>
</div>
        `,
})
