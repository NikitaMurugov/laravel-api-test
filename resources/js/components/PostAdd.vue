<template>
    <div class="container">
        <form @submit.prevent="sendData()" method="post">
            <label>
                Заголовок
                <input type="text" name="title" v-model="form.title">
            </label>
            <label>
                Описание
                <textarea v-model="form.description"></textarea>
            </label>
            <input  type="submit" value="Создать">
        </form>
        <div id="success"></div>
        <validation-errors :errors="validationErrors" v-if="validationErrors"></validation-errors>
    </div>
</template>

<script>
    import ModalSuccess from "./ModalSuccess";

    export default {
        data() {
            return {
                form: {
                    title: '',
                    description: '',
                },
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                validationErrors: ''
            }
        },
        components: {
            ModalSuccess
        },
        mounted() {

        },
        methods: {
            sendData: function () {
                axios
                    .post('http://laravel-api-test/api/post/submit',  {
                            '_token': this.csrf,
                            'title': this.form.title,
                            'description': this.form.description,
                        })
                        .then((response)=>{
                            document.querySelector('#success').html(response.data.message)
                        })
                        .catch((error) => {
                            if (error.response.status == 422){
                                this.validationErrors = error.response.data.errors;
                            }
                        });
            }
        },
    }
</script>
