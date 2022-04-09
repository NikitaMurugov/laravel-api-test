<template>
    <div class="container menu">
        <div class="menu-block">
            <div class="menu-logo"></div>
            <div class="menu-logo-name">Проект</div>
        </div>
        <div class="menu-block">
            <router-link :to="{ name:'home' }"> Главная</router-link>
            <router-link :to="{ name:'postAdd' }">Создать пост</router-link>
        </div>
    </div>
</template>


<script>
    export default {
        mounted() {

        }
    }
</script>

