import Vue from 'vue';
require('./bootstrap');

Vue.component('counter', require('./components/Counter.vue').default)

new Vue({
    el: '#app'
})
