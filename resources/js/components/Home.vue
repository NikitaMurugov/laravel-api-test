<template>
    <div class="container">
        <div class="main-page">HOME PAGE</div>
        <router-view />
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
