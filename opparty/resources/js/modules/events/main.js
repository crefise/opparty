import Index from "./Pages/Index";
import store from "./Store/store";
require('../../bootstrap.js');


window.Vue = require('vue').default;


const app = new Vue({
    el: '#app',
    components: {
        Index
    },
    store: store
});
