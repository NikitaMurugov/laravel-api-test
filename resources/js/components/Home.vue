<template>
    <div class="container">
        <div class="main-page">HOME PAGE</div>
        {{ posts }}
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
            // axios
            //     .get('http://laravel-api-test/api/posts')
            //     .then(response => (this.posts = response))
        }
    }
</script>
