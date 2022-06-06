<template>
    <div>
        <div>
            <h1>Subscribed events:</h1>
            <button v-on:click="addEventAction()">Add event</button>
        </div>

        <div v-if="showAddEventAction">
            <add-event></add-event>
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
import AddEvent from "./AddEvent";

export default {

    name: "MyEvents",

    mixins: [
        api
    ],

    data () {
        return {
            showAddEventAction: false,
        }
    },

    created() {
        this.loadListOfEvents();
    },
    methods: {
        loadListOfEvents () {
            this.loadMyEvents();
        },
        addEventAction () {
            this.showAddEventAction = !this.showAddEventAction;
        },
    },

    computed: {
        ...mapGetters([
            'myEventList',
            'myEventsIsLoaded'
        ])
    },

    components: {
        Event,
        AddEvent
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
