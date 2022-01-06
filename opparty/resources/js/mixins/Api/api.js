import axios from "axios";
import api from "../../config/api";
export default {
    methods: {
        async get(url, param=null) {
            const data = await axios.get(url, {'params': param})
                .then(response => {
                    return response.data;
                })
            return data;
        }
    },
    mixins: [
        api
    ],
}
