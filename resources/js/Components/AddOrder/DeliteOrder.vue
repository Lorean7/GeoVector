<template>
<div>
    <a class="delete flex items-center text-danger cursor-pointer" @click="OrderDelite">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2" class="lucide lucide-trash-2 w-4 h-4 mr-1">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path>
            <line x1="10" y1="11" x2="10" y2="17"></line>
            <line x1="14" y1="11" x2="14" y2="17"></line>
        </svg> Удалить
    </a>
    <!-- <i class="fa fa-minus" ></i> -->
</div>

<!-- Delete Account Confirmation Modal -->
<jet-dialog-modal :show="OrderDelites" @close="closeModal" maxWidth="2xl">
    <template #title>
        Удалить заказ #{{order_id}}
    </template>

    <template #content>
    </template>

    <template #footer>
        <jet-secondary-button @click="closeModal">
            Отмена
        </jet-secondary-button>

        <jet-danger-button class="ml-2" :class="{ 'opacity-25': form.processing }" @click="delite">
            <span>Удалить заказ</span>
        </jet-danger-button>
    </template>
</jet-dialog-modal>
<!-- BEGIN: Notification Content -->
<div id="success-notification-content" class="toastify-content hidden flex"> <i class="text-success" data-lucide="check-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium" >Сохранено!</div>
        <div class="text-slate-500 mt-1">Данные обновлены.</div>
    </div>
</div> <!-- END: Notification Content -->
</template>

<script>
import {
    defineComponent
} from 'vue'
import JetActionSection from '@/Jetstream/ActionSection.vue'
import JetDialogModal from '@/Jetstream/DialogModal.vue'
import JetDangerButton from '@/Jetstream/DangerButton.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'
import ProductList from '@/Components/AddOrder/ProductList.vue'
import PriceList from '@/Components/AddOrder/PriceList.vue'
import ClientList from '@/Components/AddOrder/ClientList.vue'
import Date from '@/Components/AddOrder/Date.vue'
import Comment from '@/Components/AddOrder/Comment.vue'
import Toastify from "toastify-js";
export default defineComponent({
    components: {
        JetActionSection,
        JetDangerButton,
        JetDialogModal,
        JetInput,
        JetInputError,
        JetSecondaryButton,
        ProductList,
        PriceList,
        ClientList,
        Date,
        Comment
    },
    props: {
        order_id: String
    },

    data() {
        return {

            form: this.$inertia.form({
                id: '',
            }),
            OrderDelites: false
        }
    },
    mounted() {

    },
    updated() {

    },
    methods: {
        OrderDelite() {
            this.OrderDelites = true;
            // this.GoorNot()
            // setTimeout(() => this.$refs.name.focus(), 250)

        },
        delite(){
            this.form.id = this.order_id
             this.form.post(route('order.delite'), {
                preserveScroll: true,
                onSuccess: () => this.allgood(),
                    // onError: () => this.$refs.name.focus(),
                    // onFinish: () => this.form.reset(),
            })
        },
        closeModal() {
            this.OrderDelites = false

            this.form.reset()
        },
        allgood(){
            this.closeModal()
            Toastify({ node: $("#success-notification-content") .clone() .removeClass("hidden")[0], duration: 3000, newWindow: true, close: true, gravity: "top", position: "right", stopOnFocus: true, }).showToast();
            this.$inertia.visit(route('orders'), { method: 'get' })
        }
    },
})
</script>
