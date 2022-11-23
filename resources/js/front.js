window.Vue = require('vue');

window.axios = require('axios');

import Vue from 'vue';
import App from'./components/AppComponent';

const app = new Vue({
    el: '#root',
    render: h => h(App)
});