<template>
    <div>
        <div>
            <h1>Accessible events:</h1>
        </div>
        <div class="box">
            <div v-for="event in eventList">
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
    mixins: [
        api
    ],
    name: "EventList",

    created() {
        this.loadListOfEvents();
    },
    methods: {
        loadListOfEvents () {
            this.loadEvents();
        }
    },

    computed: {
        ...mapGetters([
            'eventList',
            'eventsIsLoaded'
        ])
    },

    components: {
        Event
    }
}
</script>
