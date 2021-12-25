<template>
    <div>
        <h1>WElcome to events page from vue</h1>
        <event-list></event-list>
    </div>
</template>

<script>
import EventList from "../Components/EventList";
export default {
    name: "Index",

    created () {
    },

    components: {
        EventList
    }
}
</script>

<style scoped>

</style>
