
require('./bootstrap');

window.Vue = require('vue');


// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('cats-component', require('./components/Cats.vue').default);

const app = new Vue({
    el: '#app',
});
