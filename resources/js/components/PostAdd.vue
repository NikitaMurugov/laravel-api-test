<template>

    <div class="container">
        <modal-component v-if="modalData.visible" :info="modalData"></modal-component>

        <form @submit.prevent="sendData()" method="post" class="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Описание</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Название поста" v-model="form.title">
            </div>
            <div class="mb-3" >
                <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="form.description"></textarea>
            </div>
            <input class="w-100 btn btn-lg btn-primary" type="submit" value="Создать">
            <validation-errors :errors="validationErrors" v-if="validationErrors"></validation-errors>
        </form>
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
                this.modalData.visible = false;
            }
        },
    }
</script>
