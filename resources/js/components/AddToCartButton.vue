<template>
    <div class="text-center"><a href="#" v-on:click.prevent="addToCart" class="btn btn-outline-dark mt-auto" :class="{ 'added-animation': productAdded }">Add to cart</a></div>
</template>

<script>
export default {
    data() {
        return {
            productAdded: false
        };
    },
    methods: {
        async addToCart() {
            try {
                const response = await axios.post('/cart/add-to-cart', {
                    id: this.productId,
                    qty: this.productQty
                });
                
                if (response.status === 200) {
                    this.productAdded = true;

                    setTimeout(() => {
                        this.productAdded = false;
                    }, 1000);
                } else {
                    // Hacer algo si la solicitud no fue exitosa
                }
            } catch (error) {
                console.error('Error al agregar al carrito:', error);
            }
        },
    },
    props: {
        productId: {
            type: String,
            required: true,
        }, 
        productQty: {
            type: Number,
            default: 1,
            required: true,
        }
    },
};
</script>

<style>
.added-animation {
    animation: pulseAnimation 0.5s;
}

@keyframes pulseAnimation {
    0% { transform: scale(1); }
    50% { transform: scale(1.2); }
    100% { transform: scale(1); }
}
</style>

50346561