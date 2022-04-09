<template>

    <div class="container">
        <modal-component v-if="modalData.visible" :info="modalData"></modal-component>
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
import ModalComponent from "./ModalComponent";
    export default {
        data() {
            return {
                form: {
                    title: '',
                    description: '',
                },
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                validationErrors: '',
                success: false,
                modalData: {
                    title:'успех',
                    message:'пост успешно добавлен',
                    visible: false,
                }
            }
        },
        mounted() {

        },
        components: {
            "modal-component": ModalComponent,
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
                        this.modalData.visible = true;
                        this.validationErrors = null;
                        setTimeout(closeModal(), 500);
                    })
                    .catch((error) => {
                        if (error.response.status == 422){
                            this.validationErrors = error.response.data.errors;
                        }
                    });
            },
            closeModal: function() {
                this.modalData.visible = true;
            }
        },
    }
</script>
