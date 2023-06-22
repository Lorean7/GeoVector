<template>
<button class="btn btn-primary shadow-md mr-2" @click="confirmUserDeletion">Добавить клиента</button>

<!-- Delete Account Confirmation Modal -->
<jet-dialog-modal :show="confirmingUserDeletion" @close="closeModal">
    <template #title>
        Добавить клиента
    </template>

    <template #content>

        <div class="mt-4">
            <jet-input type="text" class="mt-1 block w-3/4" placeholder="Имя" ref="name" v-model="form.name" />

            <jet-input-error :message="form.errors.name" class="mt-2" />
        </div>
        <div class="mt-4">
            <jet-input type="text" class="mt-1 block w-3/4" placeholder="Телефон" ref="phone" v-model="form.phone" />
            <jet-input-error :message="form.errors.phone" class="mt-2" />
        </div>
        <div class="mt-4">
            <jet-input type="text" class="mt-1 block w-3/4" placeholder="Instagram" ref="instagram" v-model="form.instagram" />

            <jet-input-error :message="form.errors.instagram" class="mt-2" />
        </div>
        <div class="mt-4">
            <jet-input type="text" class="mt-1 block w-3/4" placeholder="Адрес" ref="adress" v-model="form.adress" />

            <jet-input-error :message="form.errors.adress" class="mt-2" />
        </div>
        <div class="mt-4">
            <select class="form-select form-select-lg mb-3
                    appearance-none
                    block
                    w-3/4
                    px-4
                    py-2
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0

                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example" v-model="form.vip">
                <option v-for="(price, index) in vip" :value="index">{{price}}</option>

            </select>

        </div>
        <div class="mt-4">
            <select class="form-select form-select-lg mb-3
                    appearance-none
                    block
                    w-3/4
                    px-4
                    py-2
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0

                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-lg example" v-model="form.type">
                <option value="1">Физическое лицо</option>
                <option value="2">Юридическое лицо</option>
            </select>
        </div>
    </template>

    <template #footer>
        <jet-secondary-button @click="closeModal">
            Отменить
        </jet-secondary-button>

        <jet-danger-button class="ml-2" @click="addUser" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
            Добавить
        </jet-danger-button>
    </template>
</jet-dialog-modal>
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

export default defineComponent({
    components: {
        JetActionSection,
        JetDangerButton,
        JetDialogModal,
        JetInput,
        JetInputError,
        JetSecondaryButton,
    },
    props: {
        vip: Object
    },
    data() {
        return {
            confirmingUserDeletion: false,

            form: this.$inertia.form({
                name: '',
                phone: '',
                instagram: '',
                adress: '',
                vip: '1',
                type: '1'
            })
        }
    },

    methods: {
        confirmUserDeletion() {
            this.confirmingUserDeletion = true;

            setTimeout(() => this.$refs.name.focus(), 250)
        },

        addUser() {
            this.form.post(route('client.add'), {
                preserveScroll: true,
                onSuccess: () => this.closeModal(),
                onError: () => this.$refs.name.focus(),

            })
        },

        closeModal() {
            this.confirmingUserDeletion = false

            this.form.reset()
        },
    },
})
</script>
