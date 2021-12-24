require('../../bootstrap.js');

window.Vue = require('vue').default;

import Index from "./Pages/Index";

const app = new Vue({
    el: '#app',
    components: {
        Index
    }
});
