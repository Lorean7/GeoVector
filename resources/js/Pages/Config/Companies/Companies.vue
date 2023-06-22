<template>
<Head title="Компании" />
<app-layout title="Компании">
    <div class="mt-4 mx-4">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Компании
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <Link :href="route('config.company.new')" class="btn btn-primary shadow-md mr-2">Добавить компанию</Link>
            </div>
        </div>
        <div class="intro-y box p-5 mt-5">
            <table class="w-full newtable" id="orders_table">
                <thead class="text-l font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            Название
                        </th>
                        <th scope="col" class="px-4 py-3">
                            ИНН
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Адрес
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Действия
                        </th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700">
                    <tr v-for="company in companies" class="hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            {{company.name}}
                        </td>
                        <td class="px-4 py-3">
                            {{company.inn}}
                        </td>
                        <td class="px-4 py-3">
                            {{company.adress}}
                        </td>
                        <td>
                            <Link class="edit flex items-center mr-3 cursor-pointer" :href="route('config.company', company.id)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="check-square" data-lucide="check-square" class="lucide lucide-check-square w-4 h-4 mr-1">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> Изменить
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</app-layout>
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

export default defineComponent({
    components: {
        AppLayout,
        Welcome,
        List,
        Head,
        Link
    },
    props: {
        companies: {}
    },
    methods: {

    },
})
</script>
