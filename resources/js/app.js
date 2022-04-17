require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/Home';
import Menu from './components/Menu';
import Footer from './components/Footer';
import ModalComponent from './components/ModalComponent';

import PostAdd from './components/PostAdd';
import PostCard from './components/PostCard';


Vue.component('validation-errors', {
    data(){
        return {

        }
    },
    props: ['errors'],
    template: `<div v-if="validationErrors">
                <ul class="alert invalid-text">
                    <li v-for="(value, key, index) in validationErrors">{{ value }}</li>
                </ul>
            </div>`,
    computed: {
        validationErrors(){
            let errors = Object.values(this.errors);
            errors = errors.flat();
            return errors;
        }
    }
})

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/home',
            name: 'home',
            component: Home
        },

        {
            path: '/post/:postId(\\d+)',
            name: 'postGet',
            component: PostCard
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
        modal: {
            title: 'Успех',
            message: 'Сообщение успешно отправлено',
        }
    },
    components: {
        "menu-component": Menu,
        "footer-component": Footer,
    },
    router
});
