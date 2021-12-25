import Vue from 'vue'
import Vuex from "vuex";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        MyEventList: [],
        MyEventListLoaded: false,
    },
    mutations: {
        LoadMyEventList (state, data) {
            state.MyEventList = data;
        }
    },
    getters: {
        MyEventList: state => {
            return state.MyEventList;
        }
    }
});

export default store;
