<template>
<Head title="Компании" />
<app-layout title="Dashboard">
    <div class="mt-4 mx-4">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Добавить новую компанию
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">

            </div>
        </div>
        <div class="intro-y box p-5 mt-5">

            <div class="grid grid-cols-6 gap-6 pb-5">
                <div class="col-span-6 sm:col-span-1">
                    <label for="country" class="block text-sm font-medium text-gray-700">Тип компании</label>
                    <select v-model="form.company_type" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="ООО">ООО</option>
                        <option value="ИП">ИП</option>
                        <option value="Самозанятый">Самозанятый</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="adress" class="block text-sm font-medium text-gray-700">Название компании</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="company_name" v-model="form.company_name" />
                    <jet-input-error :message="form.errors.company_name" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="adress" class="block text-sm font-medium text-gray-700">ИНН</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="company_inn" v-model="form.company_inn" />
                    <jet-input-error :message="form.errors.company_inn" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="adress" class="block text-sm font-medium text-gray-700">ОКПО</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="company_okpo" v-model="form.company_okpo" />
                    <jet-input-error :message="form.errors.company_okpo" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="ogrnip" class="block text-sm font-medium text-gray-700">ОГРНИП</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="ogrnip" v-model="form.company_ogrnip" />
                    <jet-input-error :message="form.errors.company_ogrnip" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="adress" class="block text-sm font-medium text-gray-700">Юридический адрес</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="company_adress" v-model="form.company_adress" />
                    <jet-input-error :message="form.errors.company_adress" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="adress" class="block text-sm font-medium text-gray-700">КПП</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="company_kpp" v-model="form.company_kpp" />
                    <jet-input-error :message="form.errors.company_kpp" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <label for="bank_name" class="block text-sm font-medium text-gray-700">Название банка</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="ogrnip" v-model="form.bank_name" />
                    <jet-input-error :message="form.errors.bank_name" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="bank_city" class="block text-sm font-medium text-gray-700">Город банка</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="ogrnip" v-model="form.bank_city" />
                    <jet-input-error :message="form.errors.bank_city" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="bank_rs" class="block text-sm font-medium text-gray-700">Рассчетный счет</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="ogrnip" v-model="form.bank_rs" />
                    <jet-input-error :message="form.errors.bank_rs" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="bank_ks" class="block text-sm font-medium text-gray-700">Корреспондентский счет</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="ogrnip" v-model="form.bank_ks" />
                    <jet-input-error :message="form.errors.bank_ks" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="bank_bik" class="block text-sm font-medium text-gray-700">БИК</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="ogrnip" v-model="form.bank_bik" />
                    <jet-input-error :message="form.errors.bank_bik" class="mt-2" />
                </div>


                <div class="col-span-6 sm:col-span-6">
                    <label for="adress" class="block text-sm font-medium text-gray-700">Комментарий</label>
                    <jet-input type="text" class="mt-1 block w-full" ref="comment" v-model="form.comment" />
                    <jet-input-error :message="form.errors.comment" class="mt-2" />
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                    <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">{{dateupdate}}</div>
                    <div class="text-slate-500">Дата последнего изменения</div>
                </div>
                <div class="flex sm:ml-auto mt-5 sm:mt-0">
                    <Link :href="route('config.companies')"><button class="btn btn-secondary w-20 ml-auto">Отмена</button></Link>
                    <button :disabled="!allow" class="btn btn-primary w-30 ml-2" @click="editCompany">Добавить</button>
                </div>

            </div>
        </div>
    </div>
</app-layout>
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
import AppLayout from '@/Layouts/AppLayout.vue'
import JetDialogModal from '@/Jetstream/DialogModal.vue'
import JetDangerButton from '@/Jetstream/DangerButton.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'
import LitepieDatepicker from 'litepie-datepicker';
import {
    Head,
    Link
} from '@inertiajs/inertia-vue3';
import Toastify from "toastify-js";

export default defineComponent({
    components: {
        LitepieDatepicker,
        JetActionSection,
        JetDangerButton,
        JetDialogModal,
        JetInput,
        JetInputError,
        JetSecondaryButton,
        AppLayout,
        Link,
        Head
    },
    props: {

    },
    data() {
        return {
            form: this.$inertia.form({
                type: '',
                company_type: '',
                company_inn: '',
                company_ogrnip: '',
                company_okpo: '',
                bank_name: '',
                bank_city: '',
                bank_rs: '',
                bank_ks: '',
                bank_bik: '',
                company_name: '',
                company_adress: '',
                comment: ''
            }),
            allow:false
        }
    },
    mounted(){
        //   $("#success-notification-toggle").on("click", function () {  });
        this.$refs.company_name.focus()
    },
    watch:{

        "form.company_name":function() {
                if(this.form.company_name != ''){
                    this.allow = true
                }
                else{
                    this.allow = false
                }
            }
        },
    methods: {
        editCompany() {
            this.form.post(route('config.company.create'), {
                preserveScroll: true,
                onSuccess: () => this.allgood(),
                    // onError: () => this.$refs.name.focus(),
                    // onFinish: () => this.form.reset(),
            })
        },
        allgood(){
            Toastify({ node: $("#success-notification-content") .clone() .removeClass("hidden")[0], duration: 3000, newWindow: true, close: true, gravity: "top", position: "right", stopOnFocus: true, }).showToast();
        }
    },
})
</script>

<style scope>

</style>
