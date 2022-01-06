<template>
    <div class="event-box">
        <div>
            <span>Desc: <span v-html="event.description"/></span>
        </div>
        <div>
            <span>Where: <span v-html="event.place"/></span>
        </div>
        <div>
            <span>When: <span v-html="event.will_happen"/></span>
        </div>
    </div>

</template>

<script>
export default {
    name: "Event.vue",

    props: {
        event: {
            type: Object,
            required: true
        }
    },

    created() {
        console.log(this.event);
    }
}
</script>

<style scoped>
    .event-box {
        margin: 10px;
        border: 1px black solid;
        width: 200px;
        padding: 10px;
        border-radius: 15px;
    }
</style>
