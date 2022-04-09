require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/Home';
import Menu from './components/Menu';
import Footer from './components/Footer';
import PostAdd from './components/PostAdd';

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/post/add',
            name: 'postAdd',
            component: PostAdd
        },
    ]
 })

const app = new Vue({

    el: '#app',
    data: {
        timestamp:''
    },
    router,
    components: {
        "menu-component": Menu,
        "footer-component": Footer
    }
});
