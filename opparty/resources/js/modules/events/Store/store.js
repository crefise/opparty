import Vue from 'vue'
import Vuex from "vuex";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        myEventList: [],
        eventList: [],
        myEventListLoaded: false,
        eventListLoaded: false,
    },
    mutations: {
        loadMyEventList (state, data) {
            state.myEventList = data;
            state.myEventListLoaded = true;
        },
        loadEventList (state, data) {
            state.eventList = data;
            state.eventListLoaded = true;
        }
    },
    getters: {
        eventList: state => {
            return state.eventList;
        },
        myEventList: state => {
            return state.myEventList;
        },
        myEventsIsLoaded: state => {
            return state.MyEventListLoaded
        },
        eventsIsLoaded: state => {
            return state.eventListLoaded
        }
    }
});

export default store;
