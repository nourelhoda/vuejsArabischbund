import Vue from "vue";
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import dataTable from '../components/dataTable'
// import AllMemebers from '../components/AllMemebers'
import container from '../components/container'
import dashboard from '../components/dashboard'

const routes =[
    {
        component:container,
        name:'container',
        path:'/container'
    },
    {
        component:dataTable,
        name:'allmembers',
        path:'/members'
    },
    {
        component:dashboard,
        name:'dashboard',
        path:'/'
    }
];
export default new VueRouter({
    routes
})
