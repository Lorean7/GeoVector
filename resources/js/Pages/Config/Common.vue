<template>
<Head title="Общие настройки" />
<app-layout title="Общие настройки">
    <div class="mt-4 mx-4">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Общие настройки
            </h2>

        </div>
        <div class="intro-y box p-5 mt-5">
            <div class="col-span-6 sm:col-span-3 pb-5">
                <label for="adress" class="block text-sm font-medium text-gray-700">Адрес склада</label>
                <input v-model="form.adress" class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md shadow-sm mt-1 block w-full" type="text">
                <div class="mt-2" style="display: none;">
                    <p class="text-sm text-red-600"></p>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">

                </div>
                <div  class="flex sm:ml-auto mt-5 sm:mt-0"><button :disabled="!allow" class="btn btn-primary w-30 ml-2" @click="editCommon">Сохранить</button></div>
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
import {
    Head,
    Link
} from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue'
import Welcome from '@/Jetstream/Welcome.vue'
import List from '@/Pages/Clients/List.vue'
import Toastify from "toastify-js";
export default defineComponent({
    components: {
        AppLayout,
        Welcome,
        List,
        Head,
        Link
    },
    props: {
        common: {}
    },
    data() {
        return {
            form: this.$inertia.form({
                adress: ''
            }),
            allow: false
        }
    },
    mounted() {
        this.form.adress = this.common.filter((tool) => tool.option_name == 'adress')[0].option_value;
    },
    watch: {
        "form.adress": function () {
            if (this.form.adress != this.common.filter((tool) => tool.option_name == 'adress')[0].option_value) {
                this.allow = true
            } else {
                this.allow = false
            }
        }
    },
    methods: {
        editCommon() {
            this.form.post(route('config.common.edit'), {
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
