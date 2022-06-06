<template>
    <div>
        <span>Invitation code: </span><input> <button v-on:click="addEvent()">join</button>
    </div>
</template>

<script>
import api from "../mixins/api";

export default {
    name: "AddEvent",

    mixins: [
        api
    ],

    methods: {
        addEvent () {
            this.joinToEvent();
        }
    }
}
</script>

<style scoped>

</style>
