<template>
    <h1>Welcome to event list</h1>
</template>

<script>
import api from "../../../mixins/Api/api";
import { mapGetters } from 'vuex';

export default {
    mixins: [
        api
    ],
    name: "EventList",

    created() {
        this.loadListOfEvents();
        setTimeout(()=> {
            console.log(this.MyEventList);
        }, 1000)
    },
    methods: {
        loadListOfEvents () {
            this.get('http://127.0.0.1:8000/api/my-events').then(data => {
                console.log(data);
                this.$store.commit('LoadMyEventList', data);
            });
        }
    },

    computed: {
        ...mapGetters([
            'MyEventList'
        ])
    }
}
</script>
