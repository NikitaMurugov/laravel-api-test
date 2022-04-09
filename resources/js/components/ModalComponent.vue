<template>
    <div class="modal-window">
        <div class="modal-block">
            <div class="modal-row modal-title">
                <span>{{info.title}}</span>
                <div class="close-modal" @click="closeModal()">x</div>
            </div>
            <div class="modal-row">
                {{info.message}}
            </div>
        </div>
    </div>
</template>
<script>

export default {
    data(){
        return {

        }
    },
    props: ['info'],
    methods: {
        closeModal: function() {
            this.info.visible = false;
        }
    }
}
</script>
