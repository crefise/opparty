<template>
    <div>
        <my-events></my-events>
        <event-list></event-list>
    </div>
</template>

<script>
import EventList from "../Components/EventList";
import MyEvents from "../Components/MyEvents";

export default {
    name: "Index",

    created () {
    },

    components: {
        EventList,
        MyEvents
    }
}
</script>

<style scoped>

</style>
