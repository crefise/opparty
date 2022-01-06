<template>
    <div>
        <div>
            <h1>Subscribed events:</h1>
        </div>
        <div class="box">
            <div
                v-for="event in myEventList"
                class="block"
            >
                <event
                    :event="event"
                />
            </div>
        </div>
    </div>
</template>

<script>
import api from "../mixins/api";
import { mapGetters } from 'vuex';
import Event from "./Event";

export default {
    name: "MyEvents",

    mixins: [
        api
    ],

    created() {
        this.loadListOfEvents();
    },
    methods: {
        loadListOfEvents () {
            this.loadMyEvents();
        }
    },

    computed: {
        ...mapGetters([
            'myEventList',
            'myEventsIsLoaded'
        ])
    },

    components: {
        Event
    }
}
</script>

<style>
    .box {
        display: flex;
    }

    .block {
        display: block;
    }
</style>
