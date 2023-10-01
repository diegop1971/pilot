<template>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Producto</th>
                <th scope="col">Description</th>
                <th scope="col">Cant.</th>
                <th scope="col">Precio unitario</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="product in products" :key="product.id">
                <td>{{ product.name }}</td>
                <td>{{ product.description }}</td>
                <td><input type="number" min="1" max="10" v-model="qty[product.id]" /></td>
                <td>{{ product.price }}</td>
                <add-to-cart-button :product-id="product.id" :product-qty="qty[product.id]"></add-to-cart-button>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        mounted() {
            this.products.forEach(product => {
                this.qty[product.id] = 1;
            });
        },
        data() {
            return {
                qty: {},
            };
        },
        props: ['products'],
    };
</script>
