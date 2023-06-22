<template #content>



    <button class="btn btn-primary shadow-md mr-2" @click="confirmUserDeletion">Добавить новую цену</button>
    <!-- Delete Account Confirmation Modal -->
    <jet-dialog-modal :show="confirmingUserDeletion" @close="closeModal">
        <template #title>
            Добавить тип цены
        </template>

        <template #content>

            <div class="mt-4">
                <jet-input type="text" class="mt-1 block w-3/4" placeholder="Имя    "
                            ref="name"
                            v-model="form.name" />

                <jet-input-error :message="form.errors.name" class="mt-2" />
            </div>
            <div class="mt-4">
                <jet-input type="text" class="mt-1 block w-3/4" placeholder="Описание"
                            ref="description"
                            v-model="form.description" />

                <jet-input-error :message="form.errors.sku" class="mt-2" />
            </div>

        </template>

        <template #footer>
            <jet-secondary-button @click="closeModal">
                Отмена
            </jet-secondary-button>

            <button class="btn btn-primary shadow-md mr-2" @click="addUser" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Создать</button>

        </template>
    </jet-dialog-modal>
</template>

<script>
    import { defineComponent } from 'vue'
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

        data() {
            return {
                confirmingUserDeletion: false,

                form: this.$inertia.form({
                    name: '',
                    description: ''
                })
            }
        },

        methods: {
            confirmUserDeletion() {
                this.confirmingUserDeletion = true;

                setTimeout(() => this.$refs.name.focus(), 250)
            },

            addUser() {
                this.form.post(route('price.add'), {
                    preserveScroll: true,
                    onSuccess: () => this.closeModal(),
                    onError: () => this.$refs.name.focus(),
                    onFinish: () => this.form.reset(),
                })
            },

            closeModal() {
                this.confirmingUserDeletion = false

                this.form.reset()
            },
        },
    })
</script>
