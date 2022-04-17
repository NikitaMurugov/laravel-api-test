<template>
    <div class="container">
        <div class="main-page">HOME PAGE</div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div v-for="post in posts" :key="post.id">
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>{{ post.title }}</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ post.title }}</text></svg>
                    <div class="card-body">
                        <p class="card-text">{{ post.description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary"><router-link :to="post/post.id">Позырить</router-link> </button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Изменить</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Удолить</button>
                            </div>
                            <small class="text-muted">{{post.created_at}}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
