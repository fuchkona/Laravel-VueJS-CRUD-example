import Axios from "axios";

require('./bootstrap');

window.Vue = require('vue');

// В компонентах библиотека axios доступна глобально, используем this.$http
Vue.prototype.$http = Axios;
Vue.prototype.$http.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    Vue.prototype.$http.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

const app = new Vue({
    el: '#app'
});
