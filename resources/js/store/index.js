import Vue from "vue"
import Vuex from "vuex"
import currentUser from "./modules/currentUser.js"
Vue.use(Vuex);

export default new Vuex.Store({
    modules:{
        currentUser
    }
})
