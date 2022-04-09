<template>
    <div class="container">
        <div class="main-page">HOME PAGE</div>

        <div v-for="post in posts" :key="post.id">
            {{ post.title }}
            {{ post.description }}
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: null,
            }
        },
        mounted() {
                axios
                    .get('http://laravel-api-test/api/posts')
                    .then(response => (this.posts = response.data))
            // setInterval( function () {
            //     axios
            //         .get('http://laravel-api-test/api/posts')
            //         .then(response => (this.posts = response.data))
            //         console.log(this.posts);
            // }, 5000);
        }
    }
</script>
