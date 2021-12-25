import axios from "axios";
export default {

    methods: {
        async get(url) {
            const data = await axios.get(url)
                .then(response => {
                    return response.data;
                })
            return data;
        }

    }
}
