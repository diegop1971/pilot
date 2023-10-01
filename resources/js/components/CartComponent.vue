<template>
    <div class="col-11">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio unitario</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <template v-if="sessionCartItems == ''" v-bind:value="sessionCartItems">
                    <h3>Tu carrito está vacío</h3>
                </template>
                <template v-else>
                    <tr v-for="(sessionCartItem, key) in sessionCartItems" v-bind:key="sessionCartItem.productId">
                        <th scope="row">1</th>
                        <td>{{ sessionCartItem.productName }}</td>


                        <td>
                            {{ sessionCartItem.productQty }}
                            <input type="number" v-model="sessionCartItem.productQty" v-if="visible" min="1">
                            <button @click="increment(sessionCartItem)">+</button>
                            <button @click="decrement(sessionCartItem)">-</button>
                        </td>

                        <td class="text-center">$ {{ formatNumber(sessionCartItem.productUnitPrice) }}</td>
                        <td class="text-right border-bottom"><p class="h6">$ {{ formatNumber(subtotal(sessionCartItem.productQty, sessionCartItem.productUnitPrice)) }}</p></td>
                        <td>
                            <a href="cart.delete-item" v-on:click.prevent="deleteItem(key)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td class="text-right">Total general:</td>
                        <td class="text-right">$ {{ formatNumber(totalGeneral) }}</td>
                        <td></td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                sessionCartItems: [],
                flag: true,
                varios: '',
                visible: false,
                productId: {
                    type: String,
                    required: true,
                }, 
                productQty: {
                    type: Number,
                    default: 1,
                    required: true,
                }
            }
        },
        computed: {
            totalGeneral() {
                return this.sessionCartItems.reduce(
                    (total, sessionCartItem) => total + this.subtotal(sessionCartItem.productQty, sessionCartItem.productUnitPrice),
                    0
                );
            },
        },
        mounted() {
            //axios.get('https://foodlink.harlan.com.ar/public/axios').then((response) => {
            axios.get('/cart/axios').then((response) => {
                this.sessionCartItems = response.data;
            }).catch(function (error) {
                    console.log(error);
            })
                .then(function () {
                    //console.log(typeof sessionCartItems);
            });
        },
        methods: {
            subtotal(qty, price) {
                return qty * price;
            },

            getItems(){
                //axios.get('https://foodlink.harlan.com.ar/public/axios').then((response) => {
                axios.get('/cart/axios').then((response) => {
                    this.sessionCartItems = response.data;
                }).catch(function (error) {
                        console.log('error: ');
                });
            },

            increment(sessionCartItem) {
                sessionCartItem.productQty++;
                this.modifyCartItemQuantity(sessionCartItem.productId, sessionCartItem.productQty);
            },

            decrement(sessionCartItem) {
                if (sessionCartItem.productQty > 1) {
                    sessionCartItem.productQty--;
                    this.modifyCartItemQuantity(sessionCartItem.productId, sessionCartItem.productQty);
                }
            },

            deleteItem(index){
                var url = '/cart/delete-item/' + index;  
                axios.get(url).then((response) => {
                    this.varios = response.data;
                    this.getItems();
                }).catch(function (error) {
                    console.log('error: ');
                });
            },

            formatNumber (num) {
                return parseFloat(num).toFixed(2)
            },

            async modifyCartItemQuantity(itemId, itemQty) {

                try {
                    const response = await axios.post('/cart/cart-item-qty', {
                        id: itemId,
                        qty: itemQty
                    });

                    if (response.status === 200) {
                        this.productAdded = true;

                        // Aclara la función `setTimeout()` antes de devolver la función.
                        clearTimeout(this.setTimeoutId);

                        // Establece un nuevo temporizador.
                        this.setTimeoutId = setTimeout(() => {
                            this.productAdded = false;
                        }, 2000);
                    }
                } catch (error) {
                    console.log('Error al agregar al carrito:', error);
                }
                }
        },
    }
</script>