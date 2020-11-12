// Bootstrap App
window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');

window.Vue = require('vue');
require('vue-resource');

Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);

    next();
});

// Passport components
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

const app = new Vue({
    el: '#app'
});
