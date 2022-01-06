import api from "../../../mixins/Api/api";
import {allEventRoute, myEventRoute} from "../config/apiRoutes";

export default {
    mixins: [
        api,
    ],

    methods: {
        loadEvents () {
            this.get(allEventRoute).then(data => {
                this.$store.commit('loadEventList', data);
            });
        },

        loadMyEvents () {
            this.get(myEventRoute, {'api_token': this.getAuthApiToken()}).then(data => {
                this.$store.commit('loadMyEventList', data);
            });
        }
    }
}
