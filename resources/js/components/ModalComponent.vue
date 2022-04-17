<template>
    <transition name="fade">
        <div class="modal modal-sheet py-5" tabindex="1" role="dialog" id="modalSheet">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-5 shadow">
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title">{{info.title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="closeModal()"></button>
                    </div>
                    <div class="modal-body py-0">
                        <p>{{info.message}}</p>
                    </div>
                    <div class="modal-footer flex-column border-top-0">
                        <button type="button" class="btn btn-lg btn-light w-100 mx-0" data-bs-dismiss="modal" @click="closeModal()">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </transition>
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

<style >
.modal {
    width: 100vw;
    height: 100vh;
    z-index: 100;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(3px);
    background: #0000004f;
}
</style>
