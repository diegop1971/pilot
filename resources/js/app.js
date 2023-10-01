/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';

import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

//import * as bootstrapIcons from 'bootstrap-icons/font/bootstrap-icons.css';

import 'bootstrap-icons/font/bootstrap-icons.css?inline';

import CartButton from './components/mainUsersNavBar/CartButton.vue';
app.component('cart-button', CartButton);

import CartComponent from './components/CartComponent.vue';
app.component('cart-component', CartComponent);

import ProductList from './components/ProductList.vue';
app.component('product-list', ProductList);

import ProductCardList from './components/ProductCardList.vue';
app.component('product-card-list', ProductCardList);

import AddToCartButton from './components/AddToCartButton.vue';
app.component('add-to-cart-button', AddToCartButton);

app.mount('#app');
